<div class="w-1/2 mx-auto">
    <h1 class="font-bold bg-blue-500 text-white p-2 rounded mb-5 pl-5">Liste Articles</h1>
    <div class="relative overflow-x-auto">
        <div class="flex justify-end">
            <a href="<?=WEBROOT?>?controller=article&action=ajouter" class="bg-blue-500 text-white font-bold p-3 rounded mb-5">
                Nouveau
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Libelle
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Qte
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$article['id']?>
                        </th>
                        <td class="px-6 py-4">
                          
                            <?=$article['libelle']?>
                        </td>
                        <td class="px-6 py-4">
                          
                            <?=$article['qteStock']?>
                        </td>
                    </tr>
                <?php endforeach ;?>

            </tbody>
        </table>
    </div>

</div>