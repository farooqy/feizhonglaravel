<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AtoC — Africa to China</title>

    <link href="https://fonts.googleapis.com/css?family=Verdana:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <style type="text/css">
        body {
            margin: 50px 0 50px 0;
            padding: 0;
            min-width: 100% !important;
            font-family: verdana;
            font-size: 13px;
        }

        .main_table {
            width: 35%;
            max-width: 700px;
            min-width: 700px;
            border: 0;
            border-top: 5px #bfd6ee solid;
            border-bottom: 5px #bfd6ee solid;
            margin: 0 auto;
            padding: 35px 0 35px 0;
            cellpadding: 0;
            cellspacing: 0;
        }

        hr {
            display: block;
            height: 1.5px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 30px 0 20px 0;
            padding: 0;
        }

        .content {
            width: 100%;
            max-width: 700px;
            min-width: 700px;
        }

    </style>
</head>

<body yahoo bgcolor="#f6f8f1">
    <table class="main_table">
        <tr>
            <th>
            <img src="{{env('APP_URL')}}/assets/mail/logo.png" alt="AtoC logo" style="height: 50px;" />
                <br>
                <p style="font-size: 16px; color: #34a3de;">AtoC — Africa to China</p>
            </th>
        </tr>
        <tr>
            <td>
                <table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="font-size: 13px; padding: 0 15px;">
                            <p style="font-size: 16px; font-weight: 600; color: #34a3de;">Dear {{$comp_name}}</p>
                            <p>Thank you for becoming an <a href="{{env('APP_URL')}}" target="_blank">AtoC — Africa to
                                    China</a> member!</p>
                            <p>Please keep a record of your important member information listed below:</p>
                            <hr>
                            <h3 style="margin-bottom: 10px;">Membership information</h3>
                            <table border="0">
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>
                                        Company name: <strong>{{$comp_name}}</strong>
                                        <br>
                                        Company phone:{{$comp_phone}}
                                        <br>
                                        Company email: <a href="mailto:email@email.com">{{$comp_email}}</a>
                                        <br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &#x25cf;
                                        <br>
                                        &#x25cf;
                                    </td>
                                    <td>
                                        Please keep this email for future reference.
                                        <br>You can enjoy your comprehensive services when signing in with your
                                        phone/email & password.
                                        <br>Your company profile will NOT be opened to general public unless you submit
                                        your company license.
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <p>We hope you receive great benefits by using our services!</p>
                            <p>This email is sent by system automatically, kindly do not reply to it. For any inquiries,
                                please contact customer service at <a href="mailto:atoc@drongo.tech"
                                    target="_blank">contact us</a></p>
                            <table border="0" margin="10">
                                <tr>
                                    <td>Best Regards,
                                        <br>Web Operations Department
                                        <br>AtoC — Africa to China ltd.
                                        <br>
                                        <br>For more information: <a href="mailto:info@drongo.tech">info@drongo.tech</a>
                                        <br><a href="{{env("APP_URL")}}" target="_blank">{{env('APP_URL')}}</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
    </table>
</body>

</html>
