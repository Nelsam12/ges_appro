<!-- FORMULAIRE -->
<div class=" flex items-center justify-center">
    <div class="connection p-4 shadow-lg rounded w-1/2 bg-white">
        <h1 class="font-bold text-center font-bold bg-blue-500 text-white p-2 rounded mb-5 pl-5">Formulaire d'Article</h1>
        <form action="<?=WEBROOT?>" method="post">
            <div class="flex flex-col w-full mb-2">
                <label for="libelle">Libelle</label>
                <input type="text" name="libelle"  id="libelle" class="p-4 border w-full outline-none">
            </div>
            <div class="flex flex-col w-full mb-2">
                <label for="qteStock">Quantité stock</label>
                <input type="text" name="qteStock" id="qteStock" class="p-4 border w-full outline-none">
            </div>
            <input type="hidden" name="controller" value="article">
            <input type="hidden" name="action" value="save">
            <button type="submit" class="bg-blue-500 px-5 py-2 rounded text-white">Save</button>
        </form>
    </div>
</div>
<!-- FORMULAIRE -->