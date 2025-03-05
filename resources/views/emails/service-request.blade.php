<!-- resources/views/emails/service-request.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Neue Serviceanfrage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8971d;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Neue Serviceanfrage: {{ ucfirst($serviceRequest->service_type) }}</h1>
        </div>
        
        <div class="content">
            <p>Eine neue Anfrage wurde eingereicht:</p>
            
            <p><strong>Name:</strong> {{ $serviceRequest->name }}</p>
            <p><strong>E-Mail:</strong> {{ $serviceRequest->email }}</p>
            <p><strong>Telefon:</strong> {{ $serviceRequest->phone }}</p>
            <p><strong>Datum:</strong> {{ $serviceRequest->date->format('d.m.Y') }}</p>
            <p><strong>Ort:</strong> {{ $serviceRequest->location }}</p>
            
            @if($serviceRequest->service_type == 'foodtruck' || $serviceRequest->service_type == 'music')
            <p><strong>Gäste:</strong> {{ $serviceRequest->guests }}</p>
            @endif
            
            @if($serviceRequest->service_type == 'photobooth' || $serviceRequest->service_type == 'music')
            <p><strong>Stunden:</strong> {{ $serviceRequest->hours }}</p>
            @endif
            
            @if($serviceRequest->service_type == 'music')
            <p><strong>Event-Typ:</strong> {{ $serviceRequest->event_type }}</p>
            <p><strong>Musikstil:</strong> {{ $serviceRequest->music_style ?? 'Nicht angegeben' }}</p>
            @endif
            
            <p><strong>Nachricht:</strong><br>
            {{ $serviceRequest->message ?? 'Keine Nachricht' }}</p>
            
            <p><a href="{{ route('dashboard') }}" style="background-color: #f8971d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; display: inline-block;">Zum Dashboard</a></p>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</body>
</html>