<?php

return [

    'module' => 'Commandes',
    'module_description' => 'Order is confirmation document sent to the customer before delivering the goods or services.',
    'delete' => 'Supprimer',
    'edit' => 'Modifier',
    'create' => 'Créer',
    'create_new' => 'Créer commande',
    'back' => 'Retour',
    'details' => 'Détails',
    'list' => 'Liste commandes',
    'updated' => 'Commande modifié',
    'created' => 'Commande créé',
    'convert_to_invoice' => 'Transformer en facture',

    'copy_from_shipping_address' => 'Copier de l\'adresse de livraison',
    'copy_from_account' => 'Copier du compte',
    'copy_from_billing_address' => 'Copier de l\'adresse de facturation',
    'print' => 'Imprimer',

    'dict' => [
        'created' => 'Créé',
        'cancel' => 'Annulé',
        'approved' => 'Approuvé',
        'delivered' => 'Livré',
        'cancelled' => 'Annumé'
    ],

    'panel' => [
        'information' => 'Information de base',
        'billing_address' => 'Adresse de facturation',
        'shipping_address' => 'Adresse de livraison',
        'terms' => 'Conditions',
        'notes' => 'Notes',
        'products_and_services' => 'Produits & Services',
        'tax_and_currency' => 'Taxes',
    ],

    'form' => [
        'order_number' => 'Numéro commande',
        'carrier_number' => 'Numéro transporteur',
        'deal_id' => 'Deal',
        'contact_id' => 'Contact',
        'customer_no' => 'NO client',
        'account_id' => 'Compte',
        'purchase_order' => 'Bon de commande',
        'due_date' => 'Date d\'échéance',
        'order_date' => 'Date commande',
        'order_status_id' => 'Statut',
        'order_carrier_id' => 'Transporteur',

        'bill_to' => 'Facturé à',
        'bill_tax_number' => 'Numéro TVA',
        'bill_street' => 'Adresse de facturation',
        'bill_country' => 'Pays de facturation',
        'bill_state' => 'Etat de facturation',
        'bill_city' => 'Ville de facturation',
        'bill_zip_code' => 'Code postal de facturation',
        'ship_to' => 'Livré à',
        'ship_tax_number' => 'Numéro TVA',
        'ship_street' => 'Adresse de livraison',
        'ship_country' => 'Pays de livraison',
        'ship_state' => 'Etat de livraison',
        'ship_city' => 'Ville de livraison',
        'ship_zip_code' => 'Code postal de livraison',
        'terms_and_cond' => 'Conditions',
        'notes' => 'Notes',
        'owned_by' => 'Assigné à',

        'product_service' => 'Produit / Service',
        'unit_cost' => 'Coût unitaire',
        'quantity' => 'Quantité',
        'line_total' => 'Total ligne',
        'subtotal' => 'Sous-total',
        'discount' => 'Réduction',
        'tax' => 'Taxe',
        'paid_to_date' => 'Payé à ce jour',
        'balance_due' => 'Reste à payer',
        'tax_id' => 'Taxe',
        'currency_id' =>  'Devise',
        'delivery_cost' => 'Coût de livraison',

        'paid' => 'Payé',
        'action' => 'Action',
        'add_row' => 'Ajouter une ligne',
        'gross_value' => 'Valeur brute',

        'tax_name' => 'Nom taxe',
        'currency_name' => 'Nom devis',
        'carrier' => 'Transporteur',
        'status' => 'Statut',
        'account_name' => 'Compte',
        'contact_name' => 'Contact',
        'deal_name' => 'Deal'

    ],

    'table' => [
    ],

    'settings' => [
        'status' => 'Statut',
        'carrier' => 'Transporteur'
    ],


    'status' => [
        'module' => 'Statut',
        'module_description' => 'Modifier statut',
        'panel' => [
            'details' => 'Détails'
        ],
        'form' => [
            'name' => 'Nom'
        ],
    ],


    'carrier' => [
        'module' => 'Transporteur',
        'module_description' => 'Modifier transporteur',
        'panel' => [
            'details' => 'Détails'
        ],
        'form' => [
            'name' => 'Nom'
        ],
    ],

    'pdf' => [
        'paid' => 'Payé',
        'order_number' => 'Commande',
        'order_date' => 'Date commande',
        'phone' => 'Téléphone',
        'fax' => 'Fax',
        'bill_to' => 'Facturer à',
        'ship_to' => 'Livrer à',
        'product_service' => 'Produit / Service',
        'unit_cost' => 'Coût unitaire',
        'quantity' => 'Quantité',
        'line_total' => 'Total',
        'subtotal' => 'Sous-total',
        'discount' => 'Réduction',
        'delivery_cost' => 'Coût de livraison',
        'tax' => 'Taxe',
        'tax_number' => 'Numéro TVA',
        'gross_value' => 'Valeur brute',
        'notes' => 'Notes',
        'terms_and_cond' => 'Conditions',
        'invoice_number' => 'Facture',
        'invoice_date' => 'Date facture',
        'due_date' => 'Payé à ce jour',
        'company' => 'Entreprise',
        'shipping' => 'Livraison',
        'carrier' => 'Transporteur',
        'carrier_number' => 'Numéro de transporteur',
        'vat' => 'Numéro TVA',
    ]


];
