# QuizzLab – Plateforme PHP de Quiz et Forum

Bienvenue sur **QuizzLab**, une plateforme Web développée en **PHP & MySQL**, permettant aux utilisateurs de s'inscrire, se connecter, participer à un forum, et réinitialiser leur mot de passe. Ce projet est conçu comme un socle pédagogique pour un futur site de quiz interactif.

---

## 🚀 Fonctionnalités principales

| Fonction | Description |
|----------|-------------|
| 🔐 Authentification | Inscription, connexion, session sécurisée |
| 🧠 Tableau de bord | Accès aux fonctionnalités réservées après connexion |
| 💬 Forum | Création et consultation de messages postés par les membres |
| 🔁 Mot de passe oublié | Génération de lien par mail pour réinitialiser le mot de passe |

---

## 🗂️ Structure des fichiers

```
├── connectionDB.php            # Connexion à la base de données via PDO
├── index.php                   # Page d'accueil
├── register.php                # Formulaire d'inscription
├── insert_u.php                # Insertion d'un nouvel utilisateur
├── login.php                   # Formulaire de connexion
├── process_login.php           # Traitement de la connexion
├── home.php                    # Tableau de bord utilisateur
├── forum.php                   # Affichage du forum
├── create_post.php             # Formulaire de création de post
├── insert_post.php             # Insertion d’un post en base
├── reset_password.php          # Demande de réinitialisation de mot de passe
├── send_reset_link.php         # Envoi du lien par mail
├── resert_password_form.php    # Formulaire pour saisir un nouveau mot de passe
├── update_password.php         # Mise à jour du mot de passe en base
└── success.html                # Page de confirmation d'inscription
```

---

## 🛠️ Installation

1. **Cloner le projet** ou copier les fichiers dans le dossier de votre serveur web (ex: `htdocs` sous XAMPP).
2. **Créer la base de données MySQL** avec les tables suivantes :

```sql
CREATE TABLE user (
  id_u INT AUTO_INCREMENT PRIMARY KEY,
  Name_u VARCHAR(30),
  Prenom_u VARCHAR(40),
  email_u VARCHAR(40) UNIQUE,
  Password_u VARCHAR(255),
  reset_token VARCHAR(255)
);

CREATE TABLE posts (
  id_p INT AUTO_INCREMENT PRIMARY KEY,
  idUser_p INT,
  objet VARCHAR(255),
  message TEXT,
  date_p DATE,
  FOREIGN KEY (idUser_p) REFERENCES user(id_u)
);
```

3. **Configurer `connectionDB.php`** avec vos identifiants MySQL :

```php
$host = "localhost";
$dbname = "nom_de_ta_base";
$user = "root";
$passwd = "";
```

4. **Lancer le projet** en ouvrant `index.php` dans votre navigateur.

---

## 📧 Prérequis pour le système d’e-mail

* Activer `mail()` sur le serveur ou utiliser une bibliothèque comme **PHPMailer** pour un envoi sécurisé.
* Modifier `send_reset_link.php` pour ajouter vos informations SMTP si besoin.

---

## ✅ Améliorations possibles

- Sécurisation des mots de passe avec `password_hash()` et `password_verify()`
- Protection CSRF pour tous les formulaires
- Système de pagination dans le forum
- Interface d’administration des utilisateurs et des messages
- Ajout des fonctionnalités de quiz (structure prête dans `home.php`)

---

## 📄 Licence

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).
