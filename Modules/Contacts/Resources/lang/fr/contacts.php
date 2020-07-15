<?php

return [

    'module' => 'Contacts',
    'module_description' => 'Les contacts sont acheteurs de biens, de services',
    'delete' => 'Supprimer',
    'edit' => 'Editer',
    'create' => 'Créer',
    'create_new' => 'Créer contact',
    'back' => 'Retour',
    'details' => 'Détails',
    'list' => 'Liste contacts',
    'updated' => 'Contacts mis à jour',
    'created' => 'Contacts créés',


    'dict' => [
        'new' => 'Nouveau',
        'approved' => 'Approuvé',
        'in_progress' => 'En cours',
        'test' => 'Test',
        'cold_call' => 'Prospecton',
        'existing_customer' => 'Client existant',
        'self_generated' => 'Auto-généré',
        'employeepartner' => 'Employé partenaire',
        'direct_mail' => 'Mail direct',
        'conference' => 'Conférence',
        'trade_show' => 'Foire',
        'web_site' => 'Site web',
        'public_relations' => 'Relations publics',
        'word_of_mouth' => 'Bouche-à-oreille',
        'other' => 'Autre',
        'owned_by' => 'Assigné à'
    ],

    'tabs' => [
        'campaigns' => 'Campagne',
        'deals' => 'Deals',
        'tickets' => 'Tickets',
        'products' => 'Intéressé par les produits',
        'purchased_products' => 'Produits achetés',
        'documents' => 'Documents',
        'quotes' => 'Devis',
        'assets' => 'Assets',
        'orders' => 'Commandes',
        'invoices' => 'Factures',
        'calls' => 'Call log',

    ],

    'panel' => [
        'information' => 'Information de base',
        'contact_data' => 'Donnée contact',
        'notes' => 'Notes',
        'additional_information' => 'Information supplémentaire',
        'address_information' => 'Information adresse'
    ],
    'form' => [
        'first_name' => 'Prénom',
        'add_date' => 'Ajouter une date',
        'last_name' => 'Nom',
        'job_title' => 'Poste',
        'department' => 'Departement',
        'contact_status_id' => 'Statut',
        'contact_source_id' => 'Source',
        'phone' => 'Téléphone',
        'mobile' => 'Mobile',
        'email' => 'Email',
        'secondary_email' => 'Email secondaire',
        'fax' => 'Fax',
        'assistant_name' => 'Nom assistant',
        'assistant_phone' => 'Téléphone assistant',
        'street' => 'Rue',
        'city' => 'Ville',
        'state' => 'Etat',
        'country' => 'Pays',
        'zip_code' => 'Code postal',
        'notes' => 'Notes',
        'owned_by' => 'Assigné à',
        'account_id' => 'Compte',
        'full_name' => 'Nom complet',
        'account_name' => 'Nom compte',
        'status' => 'Statut',
        'source' => 'Source',
        'tags' => 'Tags'
    ],

    'table' => [
        'account' => 'Compte',
        'status' => 'Statut',
        'source' => 'Source',
        'job_title' => 'Poste',
        'department' => 'Departement',
        'phone' => 'Téléphone',
        'email' => 'Email',
        'city' => 'Ville',
        'country' => 'Pays'

    ],

    'settings' => [
        'status' => 'Statut',
        'source' => 'Source'
    ],

    'status' => [
        'module' => 'Statut contact',
        'module_description' => 'Modifier statut contact',
        'panel' => [
            'details' => 'Détails'
        ],
        'form' => [
            'name' => 'Nom'
        ]
    ],


    'source' => [
        'module' => 'Source contact',
        'module_description' => 'Modifier source contact',
        'panel' => [
            'details' => 'Détails'
        ],
        'form' => [
            'name' => 'Nom'
        ]
    ],


];
