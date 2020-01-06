<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\rol;
use App\privilegio;
use App\rol_privilegio;
use App\clientenatural as natural;
use App\clientejuridico as juridico;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'password','fk_usuario_rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
    protected $primaryKey = 'codigo_usuario';
    protected $table = 'usuario';
    public $timestamps = false;

    public function permiso($permiso){
        
        if ($permiso == "cliente")
            return true;

        $rol = rol::find($this->fk_usuario_rol);

        if ($rol == null)
            return false;
        
        if ($rol["nombre"] == "administrador")
            return true;

        $rol = $rol["codigo_rol"];

        $RP = rol_privilegio::where('fk_rp_rol',$rol)->pluck('fk_rp_privilegio');

        if ($RP == null)
            return false;
        
        foreach ($RP as $rp){
            $privilegio = privilegio::find($rp);
            $privilegio = $privilegio["nombre"];
            if ($privilegio == $permiso)
                return true;
        }

        return false;
    }

    public function cliente(){
        $clienteN = natural::where('fk_clientenatural_usuario',$this->codigo_usuario)->first();
        $clienteJ = juridico::where('fk_clientejuridico_usuario',$this->codigo_usuario)->first();
        if (($clienteN == null) and ($clienteJ == null))
            return false;
        return true;
    }

    public function nombre(){
        $cliente = natural::where('fk_clientenatural_usuario',$this->codigo_usuario)->first();

        if ($cliente == null){
            $cliente = juridico::where('fk_clientejuridico_usuario',$this->codigo_usuario)->first();
            return ($cliente["razon_social"]);
        }   
        return $cliente["nombre"]; 
    }

    public function numero(){
        $cliente = natural::where('fk_clientenatural_usuario',$this->codigo_usuario)->first();

        if ($cliente == null){
            $cliente = juridico::where('fk_clientejuridico_usuario',$this->codigo_usuario)->first();
            return $cliente["rif"];
        }   
        return $cliente["cedula"]; 
    }

    public function codigo(){
        $cliente = natural::where('fk_clientenatural_usuario',$this->codigo_usuario)->first();

        if ($cliente == null){
            $cliente = juridico::where('fk_clientejuridico_usuario',$this->codigo_usuario)->first();
            return $cliente["numero_carnet"];
        }   
        return $cliente["numerocarnet"]; 
    }
}
