<div class="form-control">
    <h1>Cadastro de Usuários</h1>
    <form class=" form-control mt-3" wire:submit='save'>
        <div class="input-group mb-3">
            <div class="col-4 mb-2">
                <label for="">Nome:</label>
                <input wire:model.live='nome' type="nome">
            </div>
            <div class="col-4 mb-2">
                <label for="">Email: </label>
                <input wire:model.live='email' type="email">
            </div>
            <div class="col-4">
                <label for="">Senha: </label>
                <input wire:model.live='senha' type="password">
            </div>

        </div>


        <button class="btn btn-success align-middle" type="submit">Salvar</button>
    </form>

        <livewire:search-user>



</div>
