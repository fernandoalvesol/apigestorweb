@extends('template')
@section('conteudo')
    <div class="cat-financeiro">
        <div class="rows">

            <div class="col-12">
                <div class="caixa">
                    <span class="p-2 text-light text-uppercase  text-branco justify-center d-flex">
                        <span class="h5 mb-0 d-flex center-middle">
                            <span class=" bg-title text-light text-uppercase h5 mb-0 text-branco">
                                <svg class="icon financeiro" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 4V16M7 13.182L7.879 13.841C9.05 14.72 10.949 14.72 12.121 13.841C13.293 12.962 13.293 11.538 12.121 10.659C11.536 10.219 10.768 10 10 10C9.275 10 8.55 9.78 7.997 9.341C6.891 8.462 6.891 7.038 7.997 6.159C9.103 5.28 10.897 5.28 12.003 6.159L12.418 6.489M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"
                                        stroke="#341008" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                Dados do Recebimento</span>
                            <!--<div class="d-flex">
                                    @if (isset($venda_id))
    <a href="{{ route('venda.financeiro', $venda_id) }}" class="btn btn-azul btn-pequeno ml-1"
                                            title="Voltar"><i class="fas fa-arrow-left"></i> </a>
@else
    <a href="{{ route('recebimento.index') }}" class="btn btn-azul btn-pequeno ml-1"
                                            title="Voltar"><i class="fas fa-arrow-left"></i> </a>
    @endif
                                    <a href="" class="retorna btn btn-roxo btn-pequeno ml-1 d-inline-block" title="Menu"><i
                                            class="fas fa-bars"></i></a>
                                </div>-->
                </div>



                <div class="col-12 mt-2">
                    <div class="caixa border radius-4">
                        <span class="p-2 py-1 bg-financeiro text-center text-uppercase h5 mb-0 text-branco"> Recebimento <b
                                class="ml-1" style="color#09f785"> {{ $recebimento->id }}</b> </span>

                        <div class="caixa detalhes">
                            <div class="p-4">
                                <div class="rows p-3 pb-4">
                                    <div class="col-6 mb-3 d-flex center-middle">
                                        <label class="text-label col-3 px-0 pb-0">Data Pagamento</label>
                                        <input type="date" name="data_pagamento" readonly="readonly"
                                            value="{{ $recebimento->data_recebimento ?? null }}" readonly
                                            class="form-campo">
                                    </div>

                                    <div class="col-6 mb-3 d-flex center-middle">
                                        <label class="text-label col-3 px-0 pb-0">Forma de Pagamento</label>
                                        <input type="text" readonly="readonly"
                                            value="{{ $recebimento->forma_pagamento->forma_pagto ?? null }}"
                                            class="form-campo">
                                    </div>
                                    <div class="col-8 mb-3 d-flex center-middle">
                                        <label class="text-label col-2 px-0 pb-0">Observação</label>
                                        <input type="text" name="observacao" readonly="readonly"
                                            value="{{ $recebimento->observacao ?? null }}"class="form-campo">
                                    </div>
                                    <div class="col-4 mb-3 d-flex center-middle">
                                        <label class="text-label col-4 px-0  pb-0">Número Documento</label>
                                        <input type="text" name="numero_documento" readonly="readonly"
                                            value="{{ $recebimento->numero_documento ?? null }}" class="form-campo">
                                    </div>


                                    <div class="col-3 mb-3 d-flex center-middle">
                                        <label class="text-label">Juros</label>
                                        <input type="text" name="juros" readonly="readonly"
                                            value="{{ $recebimento->juros ?? null }}" class="form-campo mascara-float">
                                    </div>
                                    <div class="col-3 mb-3 d-flex center-middle">
                                        <label class="text-label">Multa</label>
                                        <input type="text" name="multa" readonly="readonly"
                                            value="{{ $recebimento->multa ?? null }}" class="form-campo mascara-float">
                                    </div>

                                    <div class="col-3 mb-3 d-flex center-middle">
                                        <label class="text-label">Desconto</label>
                                        <input type="text" name="desconto" readonly="readonly" id="desconto"
                                            value="{{ $recebimento->desconto ?? null }}" class="form-campo mascara-float">
                                    </div>
                                    <div class="col-3 mb-3 d-flex center-middle">
                                        <label class="text-label">Valor a Pagar</label>
                                        <input type="text" name="valor_a_receber" readonly="readonly"
                                            id="valor_a_receber" value="{{ $recebimento->valor_recebido ?? null }}"
                                            class="form-campo mascara-float">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        @endsection
