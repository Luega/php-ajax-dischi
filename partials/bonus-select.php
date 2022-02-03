<div class="col d-flex justify-content-end align-items-center">
    <div class="input-group w-50">
        <label class="input-group-text" for="inputGroupSelect01">Genre</label>
        <!-- creo una select aggiungendo un @cange per vue.js (si attiverá ad ogni cambiamento della select, facendo partire la funzione onChange in vue) e un v-model per passare il dato ai data di vue. -->
        <select class="form-select" id="inputGroupSelect01" @change="onChange($event)" v-model="key">
            <option selected>Choose...</option>
            <option value="all">all</option>
            <option value="rock">rock</option>
            <option value="pop">pop</option>
            <option value="metal">metal</option>
        </select>
    </div>
</div>