<?php
/**
 * Senapathi Alliance - Dual-Engine SMTP Dispatcher
 * Dispatches advisory enquiry notifications to info@senapathi.co.in
 * Engine 1: PHPMailer (if vendor/autoload exists)
 * Engine 2: Pure-PHP Native Socket SMTP (bypasses missing composer/vendor in cPanel git deployments)
 */

require_once __DIR__ . '/env-loader.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * Send an email notification for a newly submitted enquiry/RFP
 * 
 * @param array $data Array containing name, entity_name, email, phone, service_line, message, ref
 * @return array ['success' => bool, 'message' => string]
 */
function send_enquiry_notification(array $data): array {
    $smtpHost = env('SMTP_HOST', 'mail.senapathi.co.in');
    $smtpPort = (int)env('SMTP_PORT', 465);
    $smtpSecure = strtolower((string)env('SMTP_SECURE', 'ssl'));
    $smtpUser = env('SMTP_USER', 'info@senapathi.co.in');
    $smtpPass = env('SMTP_PASS', '');
    $fromEmail = env('SMTP_FROM_EMAIL', 'info@senapathi.co.in');
    $fromName = env('SMTP_FROM_NAME', 'Senapathi Alliance Portal');
    $recipientEmail = env('NOTIFICATION_RECIPIENT_EMAIL', 'info@senapathi.co.in');

    if (empty($smtpPass)) {
        $msg = "SMTP_PASS is not configured in .env. Email notification was skipped.";
        error_log($msg);
        return ['success' => false, 'message' => $msg];
    }

    $ref = $data['ref'] ?? ('RFP-' . date('Ymd-His'));
    $entity = htmlspecialchars($data['entity_name'] ?? 'Client Entity');
    $service = htmlspecialchars($data['service_line'] ?? 'Advisory Inquiry');
    $name = htmlspecialchars($data['name'] ?? 'Not Specified');
    $email = htmlspecialchars($data['email'] ?? 'Not Specified');
    $phone = htmlspecialchars($data['phone'] ?? 'Not Specified');
    $rawMessage = $data['message'] ?? 'No specific scope provided.';
    $message = nl2br(htmlspecialchars($rawMessage));
    $date = date('d M Y, h:i A') . ' IST';
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';

    $subject = "New Advisory Inquiry / RFP: {$entity} - {$service} [{$ref}]";

    // Premium Institutional HTML Email Template
    $htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>New Advisory Inquiry - Senapathi Alliance</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f1f5f9; margin: 0; padding: 24px; color: #1e293b; }
    .email-card { max-width: 620px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; }
    .email-head { background: #071527; padding: 30px 32px; color: #ffffff; text-align: left; border-bottom: 3px solid #0284c7; }
    .badge { display: inline-block; background: rgba(14, 165, 233, 0.2); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.4); padding: 4px 10px; border-radius: 9999px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 10px; }
    .title { font-size: 20px; font-weight: 800; margin: 0 0 6px 0; color: #ffffff; }
    .sub { font-size: 13px; color: #94a3b8; margin: 0; }
    .email-body { padding: 32px; }
    .meta-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 20px; margin-bottom: 24px; }
    .scope-box { background: #ffffff; border: 1px solid #cbd5e1; border-left: 4px solid #0284c7; border-radius: 8px; padding: 16px 18px; font-size: 14px; line-height: 1.6; color: #334155; margin-top: 12px; }
    .btn-portal { display: inline-block; background: #0284c7; color: #ffffff !important; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 700; font-size: 13px; margin-top: 24px; text-align: center; }
    .email-foot { background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 20px 32px; font-size: 12px; color: #64748b; text-align: center; }
  </style>
</head>
<body>
  <div class="email-card">
    <div class="email-head">
      <div class="badge">Website RFP Intake Engine</div>
      <h1 class="title">New Advisory Inquiry Received</h1>
      <p class="sub">Senapathi Alliance &mdash; Corporate &amp; Government Advisory</p>
    </div>

    <div class="email-body">
      <p style="font-size: 14px; color: #475569; margin-top: 0;">
        A new consultation request / RFP has been submitted through the public website portal. Details are outlined below:
      </p>

      <div class="meta-box">
        <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Reference ID:</td>
            <td style="padding: 6px 0; color: #0284c7; font-weight: 700; text-align: right; font-family: monospace;">{$ref}</td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Entity / Dept:</td>
            <td style="padding: 6px 0; color: #0f172a; font-weight: 700; text-align: right;">{$entity}</td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Primary Vertical:</td>
            <td style="padding: 6px 0; color: #0f172a; font-weight: 700; text-align: right;">{$service}</td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Contact Person:</td>
            <td style="padding: 6px 0; color: #0f172a; font-weight: 600; text-align: right;">{$name}</td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Official Email:</td>
            <td style="padding: 6px 0; color: #0284c7; font-weight: 600; text-align: right;"><a href="mailto:{$email}" style="color: #0284c7;">{$email}</a></td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Contact Phone:</td>
            <td style="padding: 6px 0; color: #0f172a; font-weight: 600; text-align: right;"><a href="tel:{$phone}" style="color: #0f172a; text-decoration: none;">{$phone}</a></td>
          </tr>
          <tr>
            <td style="padding: 6px 0; color: #64748b; font-weight: 600;">Submission Time:</td>
            <td style="padding: 6px 0; color: #475569; font-weight: 500; text-align: right;">{$date}</td>
          </tr>
        </table>
      </div>

      <div style="font-size: 13px; font-weight: 700; text-transform: uppercase; color: #64748b; letter-spacing: 0.5px;">Assignment Context / Scope Overview:</div>
      <div class="scope-box">
        {$message}
      </div>

      <div style="text-align: center;">
        <a href="https://senapathi.co.in/admin/" class="btn-portal" target="_blank">
          Open Executive Admin Dashboard &rarr;
        </a>
      </div>
    </div>

    <div class="email-foot">
      Sent automatically by <strong>Senapathi Alliance Notification Service</strong> &bull; Client IP: {$ip}<br>
      You can reply directly to this email to contact <strong>{$name}</strong> ({$email}).
    </div>
  </div>
</body>
</html>
HTML;

    $altBody = "New Advisory Inquiry - Senapathi Alliance\n"
             . "----------------------------------------\n"
             . "Ref: {$ref}\n"
             . "Entity: {$entity}\n"
             . "Vertical: {$service}\n"
             . "Name: {$name}\n"
             . "Email: {$email}\n"
             . "Phone: {$phone}\n"
             . "Time: {$date}\n\n"
             . "Scope Overview:\n{$rawMessage}\n\n"
             . "View in Admin Dashboard: https://senapathi.co.in/admin/";

    // -------------------------------------------------------------
    // ENGINE 1: PHPMailer (if vendor/autoload exists)
    // -------------------------------------------------------------
    if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = $smtpHost;
            $mail->SMTPAuth   = (bool)env('SMTP_AUTH', true);
            $mail->Username   = $smtpUser;
            $mail->Password   = $smtpPass;
            $mail->CharSet    = 'UTF-8';

            if ($smtpSecure === 'ssl' || $smtpPort === 465) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif ($smtpSecure === 'tls' || $smtpPort === 587) {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            } else {
                $mail->SMTPAutoTLS = false;
            }

            $mail->Port = $smtpPort;
            $mail->Timeout = 15;

            // SSL bypass options for cPanel localhost / internal routing
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer'       => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true,
                ],
            ];

            // Recipients
            $mail->setFrom($fromEmail, $fromName);
            $mail->addAddress($recipientEmail, 'Senapathi Inquiries Desk');
            if (!empty($data['email'])) {
                $mail->addReplyTo($data['email'], $data['name'] ?? 'Client');
            }

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;
            $mail->AltBody = $altBody;

            $mail->send();
            return ['success' => true, 'message' => 'Notification dispatched via PHPMailer SMTP.'];
        } catch (Throwable $e) {
            error_log("PHPMailer failed, falling back to Native Socket SMTP: " . $e->getMessage());
        }
    }

    // -------------------------------------------------------------
    // ENGINE 2: Pure-PHP Native SSL Socket SMTP (Zero Dependencies)
    // Works reliably on cPanel without Composer or vendor folder
    // -------------------------------------------------------------
    try {
        $prefix = ($smtpPort === 465 || $smtpSecure === 'ssl') ? "ssl://" : "";
        $context = stream_context_create([
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ]
        ]);

        $socket = @stream_socket_client("{$prefix}{$smtpHost}:{$smtpPort}", $errno, $errstr, 15, STREAM_CLIENT_CONNECT, $context);
        
        if ($socket) {
            $readResp = function($sock) {
                $res = "";
                while ($line = fgets($sock, 515)) {
                    $res .= $line;
                    if (substr($line, 3, 1) === " ") break;
                }
                return $res;
            };

            $sendCmd = function($sock, $cmd) use ($readResp) {
                fputs($sock, $cmd . "\r\n");
                return $readResp($sock);
            };

            $greeting = $readResp($socket);
            $sendCmd($socket, "EHLO localhost");

            $auth = $sendCmd($socket, "AUTH LOGIN");
            $sendCmd($socket, base64_encode($smtpUser));
            $passResp = $sendCmd($socket, base64_encode($smtpPass));

            if (strpos($passResp, '235') !== false || strpos($passResp, '250') !== false) {
                $sendCmd($socket, "MAIL FROM:<{$fromEmail}>");
                $sendCmd($socket, "RCPT TO:<{$recipientEmail}>");

                $dataResp = $sendCmd($socket, "DATA");
                if (strpos($dataResp, '354') !== false) {
                    $boundary = "----=_NextPart_" . md5(uniqid((string)time()));
                    $headers  = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
                    $headers .= "From: {$fromName} <{$fromEmail}>\r\n";
                    $clientEmail = !empty($data['email']) ? $data['email'] : $fromEmail;
                    $clientName = !empty($data['name']) ? $data['name'] : 'Client';
                    $headers .= "Reply-To: {$clientName} <{$clientEmail}>\r\n";
                    $headers .= "To: <{$recipientEmail}>\r\n";
                    $headers .= "Subject: {$subject}\r\n";
                    $headers .= "Date: " . date('r') . "\r\n";
                    $headers .= "X-Mailer: Senapathi Corporate SMTP Engine/2.0\r\n";

                    $content  = "--{$boundary}\r\n";
                    $content .= "Content-Type: text/plain; charset=UTF-8\r\n";
                    $content .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
                    $content .= $altBody . "\r\n\r\n";
                    $content .= "--{$boundary}\r\n";
                    $content .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $content .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
                    $content .= $htmlBody . "\r\n\r\n";
                    $content .= "--{$boundary}--\r\n";

                    $payload = $headers . "\r\n" . $content . "\r\n.\r\n";
                    fputs($socket, $payload);
                    $finalResp = $readResp($socket);

                    $sendCmd($socket, "QUIT");
                    fclose($socket);

                    if (strpos($finalResp, '250') !== false) {
                        return ['success' => true, 'message' => 'Notification dispatched via Native Socket SMTP.'];
                    } else {
                        $err = "Native SMTP DATA Error: " . trim($finalResp);
                        error_log($err);
                        return ['success' => false, 'message' => $err];
                    }
                }
            } else {
                $sendCmd($socket, "QUIT");
                fclose($socket);
                $err = "Native SMTP Auth Error: " . trim($passResp);
                error_log($err);
                return ['success' => false, 'message' => $err];
            }
        } else {
            $err = "Could not connect to SMTP server {$smtpHost}:{$smtpPort} - {$errstr} ({$errno})";
            error_log($err);
            return ['success' => false, 'message' => $err];
        }
    } catch (Throwable $e) {
        $err = "Native Socket SMTP Exception: " . $e->getMessage();
        error_log($err);
        return ['success' => false, 'message' => $err];
    }

    return ['success' => false, 'message' => 'All email dispatch engines failed.'];
}
