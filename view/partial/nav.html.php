<nav class="bg-blue-500 border-gray-200 mb-5">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 text-white">
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
           <ul class="flex">
            <li><a href="<?=WEBROOT?>?controller=article&action=lister" class="p-3 hover:bg-white hover:text-blue-500 rounded font-bold">Article</a></li>
            <li><a href="<?=WEBROOT?>?controller=appro&action=lister" class="p-3 hover:bg-white hover:text-blue-500 rounded font-bold">Appro</a></li>
            <li><a href="<?=WEBROOT?>?controller=fournisseur&action=lister" class="p-3 hover:bg-white hover:text-blue-500 rounded font-bold">Fournisseur</a></li>
           </ul>
        </div>
    </div>
</nav>