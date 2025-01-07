=== Disable Login Language Selector ===
Contributors: rickcurran
Donate link: https://paypal.me/rickcurranqreate
Tags: login, languages
Requires at least: 5.9
Tested up to: 6.6
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Supprimez le sélecteur de langue de l'écran de connexion si plusieurs langues sont activées dans WordPress 5.9 et versions ultérieures.

== Descriptif ==

WordPress 5.9 a ajouté un nouveau sélecteur de langue pour permettre aux utilisateurs de changer de langue à partir d'une liste déroulante sur l'écran de connexion si plusieurs langues sont activées sur votre installation WordPress. Ce extension fournit un moyen rapide et facile d'empêcher l'apparition de ce sélecteur de langue.

C'est un extension très simple qui est fourni pour la facilité d'utilisation : il vous suffit d'installer et d'activer le extension et cela empêchera la liste déroulante des langues d'apparaître sur l'écran de connexion de votre site.

Alternativement, vous pouvez également obtenir le même effet en ajoutant la ligne de code suivante au fichier `functions.php` dans votre thème:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Captures d'écran ==

1. Cette capture d'écran montre la liste déroulante des langues qui sera masquée lorsque ce extension sera activé.

== Mise en place ==

1. Téléchargez le progiciel de extensions dans le répertoire des extensiosn de votre site ou recherchez "Désactiver le sélecteur de langue de connexion" dans le répertoire des extensions WordPress à partir de la section extensions de votre tableau de bord WordPress.
2. Une fois téléchargé ou installé, vous devez activer le extension à partir de la section extensions de votre tableau de bord WordPress.
3. Le sélecteur de langue ne devrait plus apparaître sur l'écran de connexion de votre site.

== Foire aux questions ==

= A quoi sert ce extension? =

WordPress 5.9 a ajouté un nouveau sélecteur de langue pour permettre aux utilisateurs de changer de langue à partir d'une liste déroulante sur l'écran de connexion si plusieurs langues sont activées sur votre installation WordPress. Ce extension fournit un moyen rapide et facile d'empêcher l'apparition de ce sélecteur de langue.

C'est un extension très simple qui est fourni pour la facilité d'utilisation : il vous suffit d'installer et d'activer le extension et cela empêchera la liste déroulante des langues d'apparaître sur l'écran de connexion de votre site.

Alternativement, vous pouvez également obtenir le même effet en ajoutant la ligne de code suivante au fichier `functions.php` dans votre thème:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= Pourquoi devrais-je utiliser ce extension? =

Si vous avez plus d'une langue active sur votre site Web, le sélecteur de langue qui a été ajouté dans WordPress 5.9 sera visible sur votre écran de connexion. Si vous ne voulez pas que ce sélecteur de langue soit visible, l'utilisation de ce extension l'empêchera d'apparaître.

Il existe plusieurs raisons pour lesquelles vous pouvez avoir plus d'une langue active sur votre site Web, mais ne souhaitez pas que le sélecteur de langue soit visible pour les utilisateurs du site:

Peut-être avez-vous déjà un sélecteur de langue personnalisé en place dans le cadre d'un thème ou d'un extension existant, de sorte que le sélecteur de langue WordPress n'est pas requis.

Ou peut-être, comme c'est souvent le cas, WordPress a été installé avec la langue par défaut étant l'Anglais (Etats-Unis). Dans ces cas, l'activation d'une langue ultérieure entraînerait l'activation de plusieurs langues, par exemple l'anglais (Etats-Unis) et le Français (France), activant ainsi le sélecteur de langue, que vous souhaitiez ou non que plusieurs options linguistiques soient disponibles pour les utilisateurs du site.

= J'ai installé le extension mais je vois toujours le sélecteur de langue =

Vérifiez que le extension a été correctement chargé, installé et activé.

== Journal des modifications ==

= 1.0.1 =

- Aucun changement fonctionnel, cette mise à jour modifie simplement la courte description dans le fichier du extension pour qu'elle corresponde à ce qui est écrit dans la description du fichier readme

= 1.0 =

- Construction initiale du extension.
- Ajout du lien de don PayPal