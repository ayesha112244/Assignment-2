<x-layout>
    <div style="text-align:center; padding: 70px 20px;">
        <h1 style="font-size:50px; color:#e74c3c; margin-bottom:10px;">403</h1>
        <h2 style="color:#444; margin-bottom:20px;">Access Denied</h2>

        <p style="color:#666; font-size:18px; max-width:600px; margin:0 auto 30px;">
            You do not have permission to access this page.
            <br>Only administrators can manage itineraries.
        </p>

        <a href="{{ url('/') }}"
            style="background:#3498db; color:white; padding:10px 20px; 
                   border-radius:6px; text-decoration:none; font-size:16px;">
            Return to Homepage
        </a>
    </div>
</x-layout>
