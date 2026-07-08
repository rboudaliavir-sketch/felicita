# Migration TODO

- [x] Inventory all HTML files and existing PHP files
- [ ] Create PHP equivalents for all HTML pages
- [ ] Update internal links/references from `.html` to `.php`
- [ ] Apply modernized shared styling approach consistently
- [ ] Remove old `.html` files
- [ ] Final validation pass for broken references

# Plat du jour - Implémentation

- [ ] Créer stockage sécurisé du plat du jour (`data/plat_du_jour.json` + protection accès direct)
- [ ] Créer helper PHP de lecture/écriture sécurisée (`includes/dish_store.php`)
- [ ] Créer authentification admin (`admin/login.php`, `admin/logout.php`, session)
- [ ] Créer dashboard admin de publication (`admin/dashboard.php`)
- [ ] Intégrer affichage public du plat du jour animé dans `index.php`
- [ ] Valider la syntaxe PHP et le flux login/publication/affichage
