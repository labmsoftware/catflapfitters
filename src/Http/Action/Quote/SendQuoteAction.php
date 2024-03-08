<?php

namespace App\Http\Action\Quote;

use App\Domain\XferObject\CreateXferObjectAction;
use App\Renderer\RedirectRenderer;
use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class SendQuoteAction
{
    private Twig $twig;
    private RedirectRenderer $renderer;

    public function __construct(Twig $twig, RedirectRenderer $renderer)
    {
        $this->twig = $twig;
        $this->renderer = $renderer;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    {
        $subject = 'Quote for ' . $_POST['contactemail'];
        $headers = 'From: ' . $_POST['contactemail'] . '\r\n' .
        'Reply-To: ' . $_POST['contactemail']        . '\r\n' .
        'X-Mailer: PHP/' .phpversion();

        $message = 'Name: ' . $_POST['contactname'] . '\n' .
        'Email: ' . $_POST['contactemail'] . '\n' .
        'Contact Number: ' . $_POST['contactnumber'] . '\n' .
        'Postcode: ' . $_POST['postcodeaddress'] . '\n' .
        'Type Of Flap: ' . $_POST['typeofflap'] . '\n' .
        'Type Of Install: ' . $_POST['typeofinstall'] . '\n';

        if ($_POST['typeofinstall'] == "Door")
        {
            $message = $message . 'Type Of Door: ' . $_POST['typeofdoor'] . '\n';
        }
        else
        {
            $message = $message . 'Glass Width: ' . $_POST['glasswidth'] 
            . '\n' . 'Glass Height: ' . $_POST['glassheight'] . '\n';

        }
            $message = $message . 'How did they hear about us: ' . $_POST['howdidyouhear'];

        mail('louisalexander2002@hotmail.com', $subject, $message, $headers);

        $data = [
            'page' => [
                'title' => 'Sending Quote - Cat Flap Fitters Yorkshire'
            ]
        ];

        return $this->renderer->redirect($response,
        '/'
    );

    }
}