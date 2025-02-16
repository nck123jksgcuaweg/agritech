<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}
?>




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar AgriTech</title>
    <link rel="stylesheet" href="design.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="code.js"></script>
</head>
<body>

    
    <div class="container">
        <header>
            <h1>Solar AgriTech</h1>
            <div class="profile-section">
                <img src="avatar.png" alt="Profile" class="avatar">
                <button class="logout-button" onclick="logout()">
    <img src="logout.png" alt="Logout" width="30" height="30">
</button>

<script>
    function logout() {
        window.location.href = 'logout.php'; 
    }
</script>

                
            </div>
        </header>

        <div class="sidebar">
            <h2>AgriTech</h2>
            <ul>
                <li><a href="#" onclick="showTable('machine-status')">Dashboard</a></li>
                <li><a href="#" onclick="showTable('soilMonitorTable')">Soil Monitor</a></li>
                <li><a href="#" onclick="showTable('seedMonitorTable')">Seed Monitor</a></li>
                <li><a href="#" onclick="showTable('waterLevelTable')">Water Level</a></li>
                <li><a href="#" onclick="showTable('solarInputTable')">Solar Input</a></li>
                <li><a href="#" onclick="showTable('setting')">Setting</a></li>
            </ul>
        </div>
        
       
        <section class="data-section">
            <table id="soilMonitorTable" class="data-table" style="display:none;">
                <tr><th>Operation</th><th>Start Time</th><th>End Time</th><th>Status</th></tr>
            </table>
            
            <table id="seedMonitorTable" class="data-table" style="display:none;">
            <tr><th>Operation</th><th>Start Time</th><th>End Time</th><th>Status</th></tr>
            </table>
            
            <table id="waterLevelTable" class="data-table" style="display:none;">
            <tr><th>Operation</th><th>Start Time</th><th>End Time</th><th>Status</th></tr>
            </table>
            
            <table id="solarInputTable" class="data-table" style="display:none;">
            <tr><th>Operation</th><th>Start Time</th><th>End Time</th><th>Status</th></tr>
            </table>
            
            <table id="setting" class="data-table" style="display:none;">
                
            </table>
        </section>

    
 <!-- Machine Status Section with Pie Charts -->
 <section class="machine-status">
    <div class="status-card">
        <h3>Battery Level</h3>
        <canvas id="batteryChart"></canvas>
    </div>
    <div class="status-card">
        <h3>Water Level</h3>
        <canvas id="waterChart"></canvas>
    </div>
    <div class="status-card">
        <h3>Soil Level</h3>
        <canvas id="solarChart"></canvas>
    </div>
    <div class="status-card">
        <h3>Seed Level</h3>
        <canvas id="seedChart"></canvas>
    </div>
</section>
  
</body>
</html>
<script>
    window.history.pushState(null, "", window.location.href);
    window.onpopstate = function() {
        window.history.pushState(null, "", window.location.href);
    };
</script>
