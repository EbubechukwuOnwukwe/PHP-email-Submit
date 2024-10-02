# PHP Email Submission Form

This repository contains a simple contact form built with **HTML**, **Bootstrap**, and **PHP**. The form allows users to submit their name, email, phone number, and message, and the data is sent to a specified email address using PHP's `mail()` function.

## Features

- **Responsive Design** using Bootstrap 5.3.
- **PHP mail() Function**: Send emails to a specified recipient.
- Displays a success or failure message based on form submission status.

## Prerequisites

To run this project locally, ensure you have the following:

- A local PHP development environment (e.g., **WAMP**, **XAMPP**, or **MAMP**).
- PHP 7.4 or higher.

## Setup and Installation

1. **Clone the repository**:
    ```
    git clone https://github.com/EbubechukwuOnwukwe/PHP-email-Submit
    ```

2. **Move to your web server directory**:
    If you are using WAMP or XAMPP, move the cloned repository into the `www` or `htdocs` folder respectively.
    ```
    mv php-email-submit /path/to/your/server/root/
    ```

3. **Configure Email Sending**:
   Since `mail()` requires a mail server, you’ll need to configure your environment:
   - For local testing, use a service like **Mailtrap**.
   - If you are deploying to a live server, make sure you configure SMTP settings.

4. **Access the form**:
    - Open your browser and navigate to `http://localhost/php-email-submit` (or the corresponding URL for your setup).
    
5. **Submit the form**:
    - Fill in the form and submit. Depending on the server setup, you'll either see a success message or an error.

## SMTP Configuration (Optional)

To test sending emails locally, configure your SMTP settings in `php.ini` or use a third-party service like Mailtrap:

```
SMTP=smtp.mailtrap.io
smtp_port=2525
sendmail_from = your_email@example.com
```

Or, for Gmail:
```
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = your_gmail@gmail.com
username=your_gmail@gmail.com
password=your_password
```

## Issues

If you're getting errors related to sending emails (e.g., `Failed to connect to mailserver at "localhost" port 25`), this is likely due to the absence of a mail server on your local setup. Follow the SMTP setup instructions above or use a tool like Mailtrap to capture emails for testing purposes.

## License

This project is open-source and available under the **MIT License**.
