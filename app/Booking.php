<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    /**
     * The options that belong to the booking.
     */
    public function options()
    {
        return $this->belongsToMany('App\Option')
            ->withPivot('weeks', 'from', 'comment', 'price')
            ->withTimestamps();
    }

    /**
     * The country that belong to the booking.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * The payment that belong to the booking.
     */
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }

    /**
     * The accommodations that belong to the booking.
     */
    public function accommodations()
    {
        return $this->belongsToMany('App\Accommodation')
            ->withPivot('price',
                'time',
                'startDate',
                'endDate',
                'meals',
                'bathroom',
                'people',
                'type',
                'nameHotel',
                'addressHotel',
                'phoneHotel')
            ->withTimestamps();
    }

    public function wallet()
    {
        //dd($this);
        $idEntCommerce         = config('app.payme.idEntCommerce');
        $codCardHolderCommerce = 'Usu' . $this->id;
        $names                 = $this->fname;
        $lastNames             = $this->lname;
        $mail                  = $this->email;

        //Clave SHA-2.
        $claveSecreta         = config('app.payme.password_wallet');
        $registerVerification = openssl_digest($idEntCommerce . $codCardHolderCommerce . $mail . $claveSecreta, 'sha512');

        //Referencia al Servicio Web de Wallet
        $wsdl   = config('app.payme.url_wallet');
        $client = new \SoapClient($wsdl);

        //Creación de Arreglo para el almacenamiento y envío de parametros.
        $params = array(
            'idEntCommerce'         => $idEntCommerce,
            'codCardHolderCommerce' => $codCardHolderCommerce,
            'names'                 => $names,
            'lastNames'             => $lastNames,
            'mail'                  => $mail,
            'registerVerification'  => $registerVerification,
        );

        //Consumo del metodo RegisterCardHolder
        //dd($client->RegisterCardHolder($params));
        return $client->RegisterCardHolder($params);

    }
}
