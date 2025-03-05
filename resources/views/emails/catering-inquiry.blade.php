<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Neue Catering-Anfrage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #F97316;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .section {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .section h2 {
            color: #F97316;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table td {
            padding: 8px;
            border-bottom: 1px solid #eee;
        }
        .label {
            font-weight: bold;
            width: 40%;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Neue Catering-Anfrage</h1>
    </div>
    
    <div class="content">
        <div class="section">
            <h2>Kontaktinformationen</h2>
            <table>
                <tr>
                    <td class="label">Name:</td>
                    <td>{{ $inquiry['name'] }}</td>
                </tr>
                <tr>
                    <td class="label">E-Mail:</td>
                    <td>{{ $inquiry['email'] }}</td>
                </tr>
                <tr>
                    <td class="label">Telefon:</td>
                    <td>{{ $inquiry['phone'] }}</td>
                </tr>
                @if(!empty($inquiry['company']))
                <tr>
                    <td class="label">Unternehmen:</td>
                    <td>{{ $inquiry['company'] }}</td>
                </tr>
                @endif
            </table>
        </div>
        
        <div class="section">
            <h2>Veranstaltungsdetails</h2>
            <table>
                <tr>
                    <td class="label">Veranstaltungsart:</td>
                    <td>
                        @php
                            $eventTypes = [
                                'corporate' => 'Firmenfeier',
                                'wedding' => 'Hochzeit',
                                'birthday' => 'Geburtstag',
                                'conference' => 'Konferenz',
                                'private_party' => 'Private Feier',
                                'other' => 'Andere',
                            ];
                        @endphp
                        {{ $eventTypes[$inquiry['event_type']] ?? $inquiry['event_type'] }}
                    </td>
                </tr>
                <tr>
                    <td class="label">Datum:</td>
                    <td>{{ date('d.m.Y', strtotime($inquiry['event_date'])) }}</td>
                </tr>
                <tr>
                    <td class="label">Zeit:</td>
                    <td>{{ $inquiry['start_time'] }} - {{ $inquiry['end_time'] }}</td>
                </tr>
                @if(!empty($inquiry['venue_name']))
                <tr>
                    <td class="label">Veranstaltungsort:</td>
                    <td>{{ $inquiry['venue_name'] }}</td>
                </tr>
                @endif
                <tr>
                    <td class="label">Adresse:</td>
                    <td>{{ $inquiry['venue_address'] }}</td>
                </tr>
                <tr>
                    <td class="label">Anzahl der Gäste:</td>
                    <td>{{ $inquiry['guests'] }}</td>
                </tr>
            </table>
        </div>
        
        <div class="section">
            <h2>Catering-Details</h2>
            <table>
                <tr>
                    <td class="label">Ausgewähltes Paket:</td>
                    <td>
                        @if($inquiry['package'] == 'basic')
                            Basic Paket (€25/Person)
                        @elseif($inquiry['package'] == 'premium')
                            Premium Paket (€35/Person)
                        @else
                            Deluxe Paket (€45/Person)
                        @endif
                    </td>
                </tr>
                
                @if(!empty($inquiry['dietary_requirements']))
                <tr>
                    <td class="label">Besondere Ernährungswünsche:</td>
                    <td>
                        @php
                            $dietaryRequirements = [
                                'vegetarian' => 'Vegetarisch',
                                'vegan' => 'Vegan',
                                'gluten_free' => 'Glutenfrei',
                                'lactose_free' => 'Laktosefrei',
                                'nut_free' => 'Nussfrei',
                                'halal' => 'Halal',
                                'kosher' => 'Koscher',
                            ];
                            $items = [];
                            foreach($inquiry['dietary_requirements'] as $req) {
                                if(isset($dietaryRequirements[$req])) {
                                    $items[] = $dietaryRequirements[$req];
                                }
                            }
                            echo implode(', ', $items);
                        @endphp
                    </td>
                </tr>
                @endif
                
                @if(!empty($inquiry['additional_services']))
                <tr>
                    <td class="label">Zusätzliche Leistungen:</td>
                    <td>
                        @php
                            $additionalServices = [
                                'drinks' => 'Getränkeservice',
                                'waitstaff' => 'Servicepersonal',
                                'tableware' => 'Geschirr & Besteck',
                                'decoration' => 'Dekoration',
                                'setup' => 'Auf- und Abbau',
                                'transportation' => 'Transport',
                            ];
                            $items = [];
                            foreach($inquiry['additional_services'] as $service) {
                                if(isset($additionalServices[$service])) {
                                    $items[] = $additionalServices[$service];
                                }
                            }
                            echo implode(', ', $items);
                        @endphp
                    </td>
                </tr>
                @endif
                
                @if(!empty($inquiry['budget']))
                <tr>
                    <td class="label">Budget:</td>
                    <td>€{{ number_format($inquiry['budget'], 2, ',', '.') }}</td>
                </tr>
                @endif
                
                <tr>
                    <td class="label">Geschätzter Preis:</td>
                    <td>€{{ number_format($inquiry['package'] == 'basic' ? 25 * $inquiry['guests'] : ($inquiry['package'] == 'premium' ? 35 * $inquiry['guests'] : 45 * $inquiry['guests']), 2, ',', '.') }}</td>
                </tr>
            </table>
        </div>
        
        @if(!empty($inquiry['message']))
        <div class="section">
            <h2>Nachricht</h2>
            <p>{{ $inquiry['message'] }}</p>
        </div>
        @endif
        
        @if(!empty($inquiry['how_heard']))
        <div class="section">
            <h2>Wie der Kunde auf uns aufmerksam wurde</h2>
            <p>
                @php
                    $howHeard = [
                        'search' => 'Suchmaschine',
                        'social_media' => 'Social Media',
                        'recommendation' => 'Empfehlung',
                        'advertisement' => 'Werbung',
                        'other' => 'Andere',
                    ];
                @endphp
                {{ $howHeard[$inquiry['how_heard']] ?? $inquiry['how_heard'] }}
            </p>
        </div>
        @endif
    </div>
    
    <div class="footer">
        <p>Diese E-Mail wurde automatisch generiert. Bitte antworten Sie dem Kunden unter {{ $inquiry['email'] }}.</p>
        <p>&copy; {{ date('Y') }} Street Food Catering</p>
    </div>
</body>
</html>