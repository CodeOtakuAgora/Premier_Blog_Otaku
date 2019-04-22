# TOUT PREMIER PROJET DE CODE

## ***Developed by Hugo Fief***


```
Arborescence du Projet :
├───autres : fichiers cibles
├───css : style
├───espaceMembre : partie espace membre
│   ├───membres
│   │   └───avatar : avatar de l'utilisateur
│   └───php : pages php annexes
├───images : images
└───php : pages php annexes
```
---


- Pour comencer créer la base de données primfx
- Ensuite il vous faudra créer plusieurs tables : 
	* la table chat {id[int,auto_increment],pseudo[varchar],message[text]}
	* la table online {id[int,auto_increment],time[int],user_ip[varchar]}
	* la table membres {id[int,auto_increment],pseudo[varchar],mail[varchar],
		motdepasse[text],avatar[varchar]}
		
- Pour finir Il vous faudra ensuite ajouter un premier utilisateur pour :
	* l'id = 1 
	* pseudo=test
	* mail=test@gmail.com
	* motdepasse=7110eda4d09e062aa5e4a390b0a572ac0d2c0220 = [1234]
