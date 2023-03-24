<?php
use App\Models\Servicos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        //Inserindo dados
    $AgendandoServicos = new Servicos;

    $AgendandoServicos->nome = "Ednaldo de Moura";      //primeira inserção
    $AgendandoServicos->telefone = "(11)92146-8080";
    $AgendandoServicos->origem = "Celular";
    $AgendandoServicos->datadecontato = "13-03-2023";
    $AgendandoServicos->observacao = "Estou necessitando do serviço de formatação para o meu computador";
    $AgendandoServicos->save();
    
    $AgendandoServicos->nome = "Ana Beatriz";       //segunda inserção
    $AgendandoServicos->telefone = "2020-4040";
    $AgendandoServicos->origem = "Fixo";
    $AgendandoServicos->datadecontato = "17-03-2023";
    $AgendandoServicos->observacao = "Estou em busca do serviço de manutenção para o meu smartphone que quebrou";
    $AgendandoServicos->save();

    $AgendandoServicos->nome = "José Carlos";       //terceira inserção
    $AgendandoServicos->telefone = "(41)90037-8010";
    $AgendandoServicos->origem = "Celular";
    $AgendandoServicos->datadecontato = "24-03-2023";
    $AgendandoServicos->observacao = "Necessito do serviço de configuração de redes";
    $AgendandoServicos->save();

    return view('index');
});
