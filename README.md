# Адвокат Атанас Милков - Website

Modern website for the law office of Atanas Milkov, built with GravCMS and a custom theme.

## Quick Start

```bash
php -S localhost:8888 system/router.php
```

- Website: http://localhost:8888
- Admin Panel: http://localhost:8888/admin

### Admin Credentials

- Username: `admin`
- Password: `Admin@12345`

## Tech Stack

- **CMS**: GravCMS 1.7+ with Admin Panel
- **Theme**: Custom `advocate` theme
- **Fonts**: Playfair Display (headings), Inter (body) via Google Fonts
- **Language**: Bulgarian (bg)
- **PHP**: 8.0+

## Project Structure

```
user/
├── config/
│   ├── site.yaml            # Site title, metadata, SEO
│   └── system.yaml          # Theme, language, cache settings
├── pages/
│   ├── 01.home/             # Homepage (hero, services, about, blog preview, CTA)
│   ├── 02.about/            # About page
│   ├── 03.services/         # Services listing + 9 individual service pages
│   │   ├── 01.administrativno-pravo/
│   │   ├── 02.veshtno-pravo/
│   │   ├── 03.grazhdansko-pravo/
│   │   ├── 04.nakazatelno-pravo/
│   │   ├── 05.obligatsionno-pravo/
│   │   ├── 06.semeyno-i-nasledstveno-pravo/
│   │   ├── 07.trudovo-pravo/
│   │   ├── 08.targovsko-pravo/
│   │   └── 09.izpalnitelno-proizvodstvo/
│   ├── 04.blog/             # Blog listing + 6 articles
│   └── 05.contact/          # Contact page with form and map
└── themes/
    └── advocate/
        ├── advocate.php      # Theme class
        ├── advocate.yaml     # Theme config
        ├── blueprints.yaml   # Theme metadata
        ├── css/style.css     # All styles (~1200 lines)
        ├── js/main.js        # Mobile menu, scroll reveal, smooth scroll
        ├── images/           # Theme images (advocate photo)
        └── templates/
            ├── partials/
            │   ├── base.html.twig
            │   ├── header.html.twig
            │   └── footer.html.twig
            ├── home.html.twig
            ├── about.html.twig
            ├── services.html.twig
            ├── service.html.twig
            ├── blog.html.twig
            ├── blog_post.html.twig
            ├── contact.html.twig
            ├── default.html.twig
            └── error.html.twig
```

## Pages & Templates

| Page | Template | Route |
|------|----------|-------|
| Начало | `home` | `/` |
| За мен | `about` | `/about` |
| Правни услуги | `services` | `/services` |
| (each service) | `service` | `/services/{slug}` |
| Блог | `blog` | `/blog` |
| (each post) | `blog_post` | `/blog/{slug}` |
| Контакти | `contact` | `/contact` |

## Content Management

All content is managed through Markdown files in `user/pages/` or via the admin panel at `/admin`. Each page's frontmatter controls metadata, excerpts, categories, and custom icons.

### Adding a new service

Create a folder under `user/pages/03.services/` with a `service.md` file:

```markdown
---
title: 'Service Name'
excerpt: 'Short description for cards'
icon: '<svg>...</svg>'
---

## Service Name

Full content here...
```

### Adding a blog post

Create a folder under `user/pages/04.blog/` with a `blog_post.md` file:

```markdown
---
title: 'Post Title'
date: '2024-01-15'
category: 'Category Name'
---

Post content here...
```

## Deployment

### Requirements

- PHP 8.0+ with extensions: `mbstring`, `curl`, `ctype`, `dom`, `json`, `xml`, `zip`, `gd`/`imagick`
- Apache 2.4+ or Nginx
- SSL certificate (recommended via Let's Encrypt / Certbot)

### 1. Upload files

Upload the entire project to your server via SFTP, rsync, or git:

```bash
# rsync example
rsync -avz --exclude='cache/*' --exclude='logs/*' --exclude='tmp/*' \
  ./ user@server:/var/www/atanasmilkov.com/
```

### 2. Set permissions

```bash
cd /var/www/atanasmilkov.com

# Directories: 755, Files: 644
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;

# Writable directories for Grav
chmod -R 775 cache/ logs/ tmp/ images/ assets/ user/data/ backup/

# Set web server as owner
chown -R www-data:www-data .
```

### 3. Production config

Edit `user/config/system.yaml`:

```yaml
cache:
  enabled: true
  driver: auto

twig:
  cache: true
  debug: false
  auto_reload: false

assets:
  css_pipeline: true
  js_pipeline: true

errors:
  display: false
  log: true

debugger:
  enabled: false
```

### 4. Apache virtual host

```apache
<VirtualHost *:80>
    ServerName atanasmilkov.com
    ServerAlias www.atanasmilkov.com
    DocumentRoot /var/www/atanasmilkov.com

    <Directory /var/www/atanasmilkov.com>
        AllowOverride All
        Require all granted
    </Directory>

    # Redirect to HTTPS
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</VirtualHost>

<VirtualHost *:443>
    ServerName atanasmilkov.com
    ServerAlias www.atanasmilkov.com
    DocumentRoot /var/www/atanasmilkov.com

    <Directory /var/www/atanasmilkov.com>
        AllowOverride All
        Require all granted
    </Directory>

    SSLEngine on
    SSLCertificateFile /etc/letsencrypt/live/atanasmilkov.com/fullchain.pem
    SSLCertificateKeyFile /etc/letsencrypt/live/atanasmilkov.com/privkey.pem
</VirtualHost>
```

Enable the site and required modules:

```bash
a2enmod rewrite ssl
a2ensite atanasmilkov.com
systemctl reload apache2
```

### 5. Nginx virtual host (alternative)

```nginx
server {
    listen 80;
    server_name atanasmilkov.com www.atanasmilkov.com;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    server_name atanasmilkov.com www.atanasmilkov.com;
    root /var/www/atanasmilkov.com;
    index index.php;

    ssl_certificate /etc/letsencrypt/live/atanasmilkov.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/atanasmilkov.com/privkey.pem;

    # Security headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-XSS-Protection "1; mode=block" always;

    # Deny access to sensitive files
    location ~* /(\.git|cache|bin|logs|backup|tests)/.*$ { return 403; }
    location ~* /(system|vendor)/.*\.(txt|xml|md|html|yaml|yml|php|pl|py|cgi|twig|sh|bat)$ { return 403; }
    location ~* /user/.*\.(txt|md|yaml|yml|php|pl|py|cgi|twig|sh|bat)$ { return 403; }
    location ~ /(LICENSE\.txt|composer\.lock|composer\.json|\.htaccess) { return 403; }

    # Static file caching
    location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff|woff2|ttf|svg)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

```bash
ln -s /etc/nginx/sites-available/atanasmilkov.com /etc/nginx/sites-enabled/
nginx -t && systemctl reload nginx
```

### 6. SSL with Let's Encrypt

```bash
apt install certbot python3-certbot-apache  # or python3-certbot-nginx
certbot --apache -d atanasmilkov.com -d www.atanasmilkov.com
```

Certbot auto-renews via systemd timer. Verify with:

```bash
certbot renew --dry-run
```

### 7. Change admin password

After deployment, change the default admin password immediately via the admin panel at `https://atanasmilkov.com/admin` or by editing `user/accounts/admin.yaml`.

### 8. Backups

Grav stores everything in flat files. Back up the entire `user/` directory:

```bash
# Cron job: daily backup at 2am
0 2 * * * tar -czf /backups/atanasmilkov-$(date +\%Y\%m\%d).tar.gz -C /var/www/atanasmilkov.com user/
```

### Updating Grav

```bash
cd /var/www/atanasmilkov.com
bin/gpm selfupgrade
bin/gpm update
```
