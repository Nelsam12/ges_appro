<!-- FORMULAIRE -->
<div class=" bg-blue-500 flex items-center justify-center h-full">
    <div class="connection p-4 shadow-sm rounded w-1/2 bg-white">
        <h1 class="font-bold text-center">Connection</h1>
        <form action="<?=WEBROOT?>" method="post">
            <div class="flex flex-col w-full mb-2">
                <label for="login">Login</label>
                <input type="text" name="login" class="p-4 border w-full outline-none">
            </div>
            <div class="flex flex-col w-full mb-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="p-4 border w-full outline-none">
            </div>
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connection">
            <button type="submit" class="bg-blue-500 px-5 py-2 rounded text-white">Connection</button>
        </form>
    </div>
</div>
<!-- FORMULAIRE -->