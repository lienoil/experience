<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $application->site->title }} - Thank you for Pre-Registering for an Experience Philippines Road Trip</title>
    <style type="text/css">
        body { font-family: Lato, Roboto, 'Segoe UI', sans-serif; margin: 0; padding: 0; min-width: 100%!important; }
        img { height: auto; }
        .content {width: 100%; max-width: 600px;}
        .innerpadding {padding: 30px 30px 30px 30px; box-shadow: 0 1px 3px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12)!important;}
        .borderbottom {border-bottom: 1px solid #f2eeed;}
        .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
        .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
        .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
        .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
        .bodycopy {font-size: 16px; line-height: 22px;}
        .button {text-align: center; font-size: 14px; font-family: sans-serif; text-transform: uppercase; font-weight: bold; padding: 0 30px 0 30px; box-shadow: 0 1px 3px rgba(0,0,0,.2),0 1px 1px rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12)!important;}
        .button a {color: #ffffff; text-decoration: none;}
        .footer {padding: 40px 0 80px 0;}
        .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
        .footercopy a {color: #ffffff; text-decoration: underline;}

        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .hide {display: none!important;}
            body[yahoo] .buttonwrapper {background-color: transparent!important;}
            body[yahoo] .button {padding: 0px!important;}
            body[yahoo] .button a {background-color: #fdbe3c; padding: 15px 15px 13px!important;}
            body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
        }

        /*@media only screen and (min-device-width: 601px) {
        .content {width: 600px !important;}
        .col425 {width: 425px!important;}
        .col380 {width: 380px!important;}
        }*/
        table.colored {
            border-radius: 2px;
            margin: 20px 0 25px;
            min-width: 400px;
            border: 1px solid #eee;
        }
        .colored tr {
            background: #fbfbfb;
        }
        .colored td,
        .colored th {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
  </style>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body yahoo bgcolor="#ecf0f5">
    <table width="100%" bgcolor="#ecf0f5" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                <![endif]-->
                <table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="header">
                            <table align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 40px 0 30px 0; font-family: Open Sans, sans-serif;">
                                        <img src="{{ $message->embed(assets('experience/images/brand.png')) }}" alt="{{ settings('site_title') }}" width="80" style="display: block;" />
                                        <h1 style="font-weight: 400; color: #424242; font-size: 23px;">Your booking <br> has been confirmed</h1>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="innerpadding borderbottom" bgcolor="#ffffff" style="border-radius: 3px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" bgcolor="#66b9e5" style="padding: 40px 0 30px 0; border-radius: 3px;">
                                        <img src="{{ $message->embed(assets('experience/images/display.png')) }}" alt="{{ settings('site_title') }}" width="120" style="display: block;" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>{{ __("Dear Road Tripper $user->firstname,") }}</p>
                                        <p>{{ __('First of all, thank you for pre-registering for the Experience Philippines Road Trip.') }}</p>
                                        <p>{{ __('Just to recap your answers to the registration, here are the results.') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 40px 0 30px 0; border-radius: 3px;">
                                        <table class="colored" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td><strong>First Name</strong></td>
                                                <td>{{ $user->firstname }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Last Name</strong></td>
                                                <td>{{ $user->lastname }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Birthday</strong></td>
                                                <td>{{ $user->detail->birthday ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Mobile</strong></td>
                                                <td>{{ $user->detail->mobile ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email Address</strong></td>
                                                <td>{{ $user->email ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Home Address</strong></td>
                                                <td>{{ $user->detail->address ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Which Road Trip/s would you like to sign up?</strong></td>
                                                <td>{{ $order->product->name ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shirt Size</strong></td>
                                                <td>{{ $user->detail->shirt_size ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Looking forward to</strong></td>
                                                <td>{{ $order->message ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Message</strong></td>
                                                <td>{{ $order->metadata_text ?? '' }}</td>
                                            </tr>

                                            {{--  --}}
                                            <tr><td style="padding: 5px 0 5px 0"></td></tr>
                                            {{--  --}}

                                            {{-- <tr>
                                                <td><strong>Total Price</strong></td>
                                                <td>{{ settings('site_currency.code', 'PHP') }} {{ $order->total }}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td style="color: #555555">for {{ $order->quantity }} people</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td style="color: #555555">{{ settings('site_currency.code', 'PHP') }} {{ $order->price }} each</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td style="color: #555555">
                                                    <em>
                                                        You're going with
                                                        <br>
                                                        @if (unserialize($order->metadata))
                                                            @foreach (unserialize($order->metadata) as $metadata)
                                                                <strong>{{ $metadata['name'] }}</strong><br>
                                                            @endforeach
                                                        @endif
                                                    </em>
                                                </td>
                                            </tr> --}}
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>My name is Gian, the Founder of Experience Philippines, and I will make sure you are well taken care of during our EXPERIENCE PHILIPPINE ADVENTURE!</p>
                                        <p>Secondly, keep an open mind in this trip because we will meet new people, make new friends and experience all sort of adventure and exciting activities.</p>
                                        <p>To reserve your slot, <strong>please pay the road trip fee within 3 days of receipt for guaranteed slot.</strong></p>
                                        <p>Before you think about making any payments, check out the reviews from those who recently joined if you are still not sure, or wondering about if we are legit or curious what people say about us. We just want you to experience something out of your comfort zone because that is where the magic happens. - https://goo.gl/4S5zpR</p>
                                        <p>You can settle the Reservation Fee via the following:</p>
                                        <p><strong>1. Via Credit Card</strong></p>
                                        <ul><li>Through Paypal safe and secure payment website (kindly let us know so we can send you a Paypal Invoice; note additional 5% will be added on top of the fee.</li></ul>
                                        <p><strong>2. Via Bank Deposit (Over the counter or via Online Transfer)</strong></p>
                                        <ul><li>BPI Commercial Bank - Account # 9641-0003-69, EXPH Travel Differently Inc.</li></ul>
                                        <p>Please take note of our refund policy as follows:</p>
                                        <p><strong>For Reservations:</strong> It is not refundable but transferrable to another trip.</p>
                                        <p><strong>For Full Payments</strong></p>
                                        <ul>
                                            <li>Full Refund - Before 2 weeks (More than 10 business days) before the trip</li>
                                            <li>Half Refund - Within 10 business days but more than 5 days before the trip</li>
                                            <li>No Refund - 5 days or less before the trip</li>
                                        </ul>
                                        <p>Once payment has pushed through, we will be sending email updates regarding the trip, the departure, things to bring, etc.</p>
                                        <p>Please email us your payment/deposit slip ASAP so we can assign you your slot.</p>
                                        <p>Send it in with the subject: Proof of Payment for {Experience} - {Your Name},</p>
                                        <p><em>e.g. Proof of Payment for (Insert which trip) - Woman, Wonder</em></p>
                                        <p>If you have any questions, shoot us an email or get in touch with Gian at 0917.563.9692.</p>
                                        <p>Maraming salamat and looking forward to seeing you soon! Come and let's travel differently!</p>
                                        <p>Cheers,</p>
                                        <p>Gian Gallegos</p>
                                        <p>Founder, EXPH Travel Differently Inc.</p>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    {{--  --}}
                    <tr><td style="padding: 5px 0 5px 0"></td></tr>
                    {{--  --}}

                    {{-- <tr>
                        <td class="innerpadding borderbottom" bgcolor="#ffffff" style="border-radius: 3px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="color: #555555; font-size: 20px;padding: 10px 0 10px 0">
                                        <a href="#">{{ $order->product->name }}</a>
                                    </td>
                                </tr>
                                @if ($order->scheduled['start_date'])
                                    <tr>
                                        <td>
                                            {{ $order->scheduled['start_date'] . " - " . $order->scheduled['end_date'] }}
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td style="color: #555555"><strong>Package Inclusions</strong></td>
                                </tr>
                                <tr>
                                    <td style="color: #555555;">
                                        <ul>
                                            @foreach ($order->product->amenities as $amenities)
                                                <li>{{ $amenities->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="color: #555555;padding: 0 0 5px 0;"><strong>Meetup Place</strong></td>
                                </tr>
                                <tr>
                                    <td style="color: #555555;">
                                        <em>{!! nl2br($order->product->map_instructions) !!}</em>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> --}}

                    {{--  --}}
                    {{-- <tr><td style="padding: 5px 0 5px 0"></td></tr> --}}
                    {{--  --}}

                    <td class="footer">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" class="footercopy" style="font-size: 12px; padding: 20px 0 0 0; color: #636262; font-family: Open Sans, sans-serif;">
                                    {{ $application->site->copyright  }}<br/>
                                    All rights reserved.
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                      </td>
                    </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</body>
</html>
