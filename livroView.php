<?php
function exibirLivros($livros){
    echo "
    <style>
        .estante-container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f4e8;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .estante-title {
            color: #3a3a3a;
            text-align: center;
            margin-bottom: 25px;
            font-size: 2rem;
            border-bottom: 2px solid #e1c7a7;
            padding-bottom: 10px;
        }
        
        .livros-list {
            list-style-type: none;
            padding: 0;
        }
        
        .livros-list li {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-left: 5px solid #a78a6e;
            border-radius: 0 5px 5px 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .livros-list li:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .livros-list strong {
            color: #5c4d3c;
        }
        
        @media (max-width: 600px) {
            .estante-container {
                padding: 15px;
                margin: 10px;
            }
            
            .estante-title {
                font-size: 1.5rem;
            }
            
            .livros-list li {
                padding: 10px;
                font-size: 0.9rem;
            }
        }
    </style>
    
    <div class='estante-container'>
        <h2 class='estante-title'>Estante Digital</h2>
        <ul class='livros-list'>";

    foreach ($livros as $livro) {
        echo "<li><strong>Título:</strong> {$livro['title']} <br><strong>Autor:</strong> {$livro['autor']} <br><strong>Ano:</strong> {$livro['ano']}</li>";
    }

    echo "</ul></div>";
}
?>