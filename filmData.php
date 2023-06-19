<?php

$movies = [
    new Movie(
        'Ant-Man and the Wasp: Quantumania',
        'English',
        2023,
        [
            new Genres('Azione', "'Film d'azione' si riferisce piuttosto a un genere hollywoodiano diffusosi negli ultimi vent'anni del 20° sec., e caratterizzato dal conflitto manicheo e violento tra un eroe positivo e atletico e diversi antagonisti, anch'essi atletici e spesso dotati di una considerevole forza tecnologica.", 1),
            new Genres('Fantascienza', 'Questo genere di film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.', 2),
            new Genres('Avventura', "Genere cinematografico destinato al divertimento e all'evasione, basato sul racconto di imprese rischiose e piene di imprevisti, inserite all'interno di viaggi in luoghi misteriosi e irti di pericoli.", 3),
        ]
    ),
    new Movie(
        'Super Mario Bros. - Il film',
        'English',
        2023,
        [
            new Genres('Animazione', "Da un punto di vista tecnico il cinema di a. si differenzia da quello fotografico, o 'dal vero', per il fatto che l'effetto del movimento è ottenuto attraverso il proiettore e non la macchina da presa.", 4),
            new Genres('Commedia', "Un film commedia è un genere di film che pone l'accento sull'umorismo. I film di questo genere solitamente hanno un lieto fine. Il genere non va scambiato col film comico, nel quale lo scopo principale è quello di far ridere il pubblico.", 5),
            new Genres('Avventura', "Genere cinematografico destinato al divertimento e all'evasione, basato sul racconto di imprese rischiose e piene di imprevisti, inserite all'interno di viaggi in luoghi misteriosi e irti di pericoli.", 3),
        ]
    ),
];
