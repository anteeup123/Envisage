<?php
$variables = [
    'HeaderColor' => '#2c3e50',
    'Status' => 'Approved',
    'StatusLower' => 'approved',
    'Name' => 'John Doe',
    'Email' => 'john@example.com',
    'FirmName' => 'Legal Group LLP',
    'ActionBy' => 'Admin User',
    'ActionDate' => 'July 20, 2025',
    'DenialReason' => ''
];
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: <?= $variables['HeaderColor'] ?>; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background-color: #f9f9f9; }
        .footer { margin-top: 20px; padding: 10px; text-align: center; font-size: 0.8em; color: #777; }
        .details { background-color: white; padding: 15px; border-left: 4px solid <?= $variables['HeaderColor'] ?>; margin: 15px 0; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Attorney Request <?= $variables['Status'] ?></h1>
    </div>

    <div class="content">
        <p>Hello Admin,</p>
        <p>The following attorney access request has been <?= $variables['StatusLower'] ?>:</p>

        <div class="details">
            <p><strong>Name:</strong> <?= $variables['Name'] ?></p>
            <p><strong>Email:</strong> <?= $variables['Email'] ?></p>
            <p><strong>Firm:</strong> <?= $variables['FirmName'] ?></p>
            <p><strong>Status:</strong> <?= $variables['Status'] ?></p>
            <p><strong>Action By:</strong> <?= $variables['ActionBy'] ?></p>
            <p><strong>Action Date:</strong> <?= $variables['ActionDate'] ?></p>
            <?= $variables['DenialReason'] ?>
        </div>

        <p>For approved requests, the attorney should have received their welcome email with login instructi
