<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

 <?php 
 
 $mainText = " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eligendi voluptates nobis aperiam? Ex vitae ad beatae suscipit enim adipisci veniam cum laboriosam! Mollitia architecto, esse, quos numquam nam deleniti commodi alias facere vel modi fugiat aperiam. Reprehenderit laborum, aliquam dolores quas ea itaque, soluta quibusdam magni fuga voluptate maxime molestias animi consectetur, veniam dolore! Vitae est aperiam hic dolores rem facere quasi nesciunt iusto veritatis, excepturi quod corrupti deserunt enim fugit repellat omnis rerum quaerat assumenda. Consequatur fuga facere ab voluptatum saepe soluta repellat assumenda, delectus itaque corrupti. Atque quod, sit aliquid quasi velit recusandae tenetur vel optio quisquam fuga eos reprehenderit sed debitis. Adipisci ratione consectetur voluptate magni error doloremque reprehenderit nobis libero necessitatibus, vitae incidunt sed voluptatum tempore sunt. Eos, enim quibusdam, dolorem quidem nisi molestiae ipsam culpa vel unde autem sint impedit laborum quod. Necessitatibus eligendi magnam placeat suscipit incidunt illo dicta sequi, molestias veritatis inventore maiores officia impedit voluptas possimus quos ipsa, recusandae aspernatur a dolorum consequuntur eum! Nemo enim autem asperiores, praesentium debitis ipsa perferendis, architecto quis tempore rerum quidem corrupti voluptas excepturi nobis in, accusamus beatae illum cum iusto nostrum cupiditate minima? Nihil sit praesentium et amet? Eveniet eos quasi cumque molestias similique! Dolorum dolorem, reprehenderit adipisci labore numquam soluta, modi culpa tempora sapiente quaerat fugiat amet odio hic quidem eveniet officiis minima repudiandae iusto omnis dignissimos. Atque, repudiandae. Facere nemo doloremque aut provident eos consequatur quisquam voluptatum, assumenda quos illo! Unde sunt nesciunt consectetur cum velit vel sed deserunt molestiae, harum, mollitia a. Expedita accusantium quod repellat fuga ea pariatur ullam, sed quas, neque reiciendis quasi labore consectetur quidem, maxime explicabo reprehenderit! Iusto maiores id ratione, amet minima eveniet voluptates, error quis molestiae a facilis similique ullam in molestias, aut impedit labore perferendis illo aliquam distinctio deserunt. Fuga voluptates aliquid modi est!
";
$arrayText = explode('.', $mainText);

 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack-5</title>
 </head>
 <body>

 <div >
     <h2>Paragrafo originale</h2>
    <p> <?=$mainText ?> </p>
    
    <h2>Paragrafo spezzettato</h2>
    <?php foreach ($arrayText as $text) : ?>
       <p> <?= $text ?> </p>
    
    <?php endforeach; ?>
</div>

 </body>
 </html>