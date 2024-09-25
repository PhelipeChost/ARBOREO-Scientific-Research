<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function enviarEmail(Request $request)
    {
        // Validação simples do formulário
        $request->validate([
            'email' => 'required',
            'message' => 'required',
        ]);

        $mail = new PHPMailer(true);

        try {
            // Configuração do servidor de e-mail
            $mail->isSMTP();
            $mail->isHTML(true);
            $mail->CharSet = 'UTF8';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'auxiliotecnicocps@gmail.com'; // Seu e-mail
            $mail->Password = 'mcrfzrxrsuzacfqw'; // Sua senha de app do Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Remetente e destinatário do e-mail
            $mail->setFrom('auxiliotecnicocps@gmail.com', 'ATI-Cps');
            $mail->addAddress('auxiliotecnicocps@gmail.com'); // Destinatário

            // Assunto e corpo do e-mail
            $mail->Subject = 'Novo formulário de contato';
            $mail->Body = 'Email: ' . $request->input('email') . '<br>';
            $mail->Body .= 'Mensagem: ' . $request->input('message') . '<br>';

            // Enviar o e-mail
            $mail->send();

            // Retornar mensagem de sucesso
            return redirect()->back()->with('success', 'E-mail enviado com sucesso!');
        } catch (Exception $e) {
            // Retornar mensagem de erro com a exceção do PHPMailer
            return redirect()->back()->with('error', 'Erro ao enviar e-mail: ' . $mail->ErrorInfo);
        }
    }
}
