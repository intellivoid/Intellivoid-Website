<?php

    use DynamicalWeb\Runtime;
    use Support\Support;
    use Support\Utilities\Validation;

    Runtime::import('Support');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(verify_recaptcha() == false)
        {
            header('Location: /contact?callback=106');
            exit();
        }

        if(isset($_POST['email']) == false)
        {
            header('Location: /contact?callback=100');
            exit();
        }

        if(isset($_POST['subject']) == false)
        {
            header('Location: /contact?callback=100');
            exit();
        }

        if(isset($_POST['message']) == false)
        {
            header('Location: /contact?callback=100');
            exit();
        }

        submit_report();

    }

    function submit_report()
    {
        if(Validation::email($_POST['email']) == false)
        {
            header('Location: /contact?callback=101');
            exit();
        }

        if(Validation::subject($_POST['subject']) == false)
        {
            header('Location: /contact?callback=102');
            exit();
        }

        if(Validation::message($_POST['message']) == false)
        {
            header('Location: /contact?callback=103');
            exit();
        }

        $IntellivoidSupport = new Support();

        try
        {
            $SupportTicket = $IntellivoidSupport->getTicketManager()->submitTicket(
                'Intellivoid Website', $_POST['subject'], $_POST['message'], $_POST['email']
            );
        }
        catch(Exception $exception)
        {
            header('Location: /contact?callback=104');
            exit();
        }

        header('Location: /contact?callback=105&ticket_number=' . urlencode($SupportTicket->TicketNumber));
        exit();
    }