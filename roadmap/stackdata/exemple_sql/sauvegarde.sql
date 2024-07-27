# Sauvegarde d'une base de données avec mysqldump
mysqldump -u utilisateur -p base_de_donnees > sauvegarde.sql

# Restauration d'une base de données avec mysql
mysql -u utilisateur -p base_de_donnees < sauvegarde.sql
