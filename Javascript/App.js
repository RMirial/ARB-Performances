/* COMPTE A REBOURS COURSES
================================================*/

/* course 1*/
function compte_a_rebours1() {
    var compte_a_rebours = document.querySelector("section.course1 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("May 15 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évènement le <strong> 15 & 16 </strong> Mai <br>Dijon Prenois<br> Manche 1 Championnat de France d'endurance<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours1();", 1000);
}
compte_a_rebours1();

/* course 2*/

function compte_a_rebours2() {
    var compte_a_rebours = document.querySelector("section.roulage1 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("June 03 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évenement le <strong> 03 & 04 </strong> Juin <br>Le vigeant <br>Roulage d'entrainement<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours2();", 1000);
}
compte_a_rebours2();

/* course 3*/
function compte_a_rebours3() {
    var compte_a_rebours = document.querySelector("section.course2 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("Jully 03 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évenement le <strong> 03 & 04 </strong> Juillet <br>Le Vigeant<br> Manche 2 Championnat de France d'endurance<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours3();", 1000);
}
compte_a_rebours3();


/* course 4*/

function compte_a_rebours4() {
    var compte_a_rebours = document.querySelector("section.course3 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("Jully 31 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évenement le <strong> 31 </strong>Juillet <strong>& 01 </strong> Aout <br>Dijon Prenois<br> Manche 3 Championnat de France d'endurance<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours4();", 1000);
}
compte_a_rebours4();

/* course 5*/

function compte_a_rebours5() {
    var compte_a_rebours = document.querySelector("section.course4 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("September 04 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évenement le <strong> 04 & 05 </strong> Septembre <br>Le Mans<br> Manche 4 Championnat de France d'endurance<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours5();", 1000);
}
compte_a_rebours5();

/* course 6*/

function compte_a_rebours6() {
    var compte_a_rebours = document.querySelector("section.course5 .compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("October 09 08:00:00 2021");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe =
        "Prochain évenement le <strong> 09 & 10 </strong> Octobre <br>Magny-Cours<br> Manche 5 Championnat de France d'endurance<br> dans : ";
    if (total_secondes < 0) {
        prefixe =
            "Compte à rebours terminé il y a "; // On modifie le préfixe si la différence est négatif
        total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
    }

    if (total_secondes > 0) {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes *
            60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0) {
            jours = '';
            mot_jour = '';
        } else if (jours == 1) {
            mot_jour = "jour,";
        }

        if (heures == 0) {
            heures = '';
            mot_heure = '';
        } else if (heures == 1) {
            mot_heure = "heure,";
        }

        if (minutes == 0) {
            minutes = '';
            mot_minute = '';
        } else if (minutes == 1) {
            mot_minute = "minute,";
        }

        if (secondes == 0) {
            secondes = '';
            mot_seconde = '';
            et = '';
        } else if (secondes == 1) {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0) {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure +
            ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
    }

    var actualisation = setTimeout("compte_a_rebours6();", 1000);
}
compte_a_rebours6();