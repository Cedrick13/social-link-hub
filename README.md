# 🌐 Social Link Hub

A personal **Social Link Hub** designed to bring all your social media accounts, contact information, and personal links together in one place.

Built with PHP, HTML, CSS, and JavaScript, this project provides a centralized space where visitors can easily discover and connect with you through your different online platforms.

## ✨ Features

- **Personal Profile** – Display your profile picture, name, bio, and personal information.
- **Social Media Links** – Keep all your social media accounts organized in one place.
- **Contact Information** – Provide accessible ways for visitors to reach you.
- **Organized Navigation** – Separate profile, links, and contact sections.
- **Responsive Design** – Designed for a smooth experience across desktop and mobile devices.
- **Centralized Configuration** – Manage profile details and social links through a dedicated PHP configuration file.
- **Custom Styling** – Personalized interface with custom CSS.
- **Vercel Deployment** – Configured for deployment using Vercel.

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend and dynamic content |
| HTML5 | Page structure |
| CSS3 | Styling and responsive layout |
| JavaScript | Interactive functionality |
| Font Awesome | Social media icons |
| Vercel | Deployment and hosting |

## 📁 Project Structure

```text
social-link-hub/
│
├── api/
│   └── index.php
│
├── config/
│   └── profile.php
│
├── includes/
│   ├── bottom-nav.php
│   ├── footer.php
│   ├── header.php
│   ├── tab-contact.php
│   ├── tab-links.php
│   └── tab-profile.php
│
├── public/
│   ├── css/
│   │   └── style.css
│   ├── images/
│   │   ├── dp.png
│   │   └── icon.png
│   └── js/
│       └── app.js
│
├── README.md
└── vercel.json
```

## ⚙️ Configuration

Personalize your Social Link Hub by editing:

`config/profile.php`

This is where you can configure your personal profile information and social media links.

You can customize:
- Display name
- Profile description
- Profile picture
- Social media platforms
- Social media URLs
- Platform icons and colors

## 🚀 Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/YOUR-USERNAME/social-link-hub.git
   ```

2. Navigate to the project directory:

   ```bash
   cd social-link-hub
   ```

3. Configure your personal information inside:

   ```text
   config/profile.php
   ```

4. Run the project using a PHP development server:

   ```bash
   php -S localhost:8000
   ```

5. Open your browser and visit:

   ```text
   http://localhost:8000
   ```

## ☁️ Deployment

This project includes a `vercel.json` configuration file for deployment on Vercel.

1. Push your project to GitHub.
2. Sign in to [Vercel](https://vercel.com/).
3. Import your GitHub repository.
4. Configure the project according to the included PHP runtime configuration.
5. Deploy your project.

## 📸 Preview

<!-- Add your project screenshot here -->

![Social Link Hub Preview](public/images/preview.png)

## 👨‍💻 Author

**Cedrick Embestro**

IT Support Specialist | Network Enthusiast | Web Designer

- Portfolio: [ced-portfolio.vercel.app](https://ced-portfolio.vercel.app/)
- GitHub: [@Cedrick13](https://github.com/Cedrick13)

## 📄 License

This project is available for personal and educational use. Please provide appropriate credit when using or modifying the project.

---

⭐ If you find this project useful, consider giving the repository a star!

**Connect. Explore. Stay Social.**
