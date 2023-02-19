<?php

namespace App\Command;

use App\Entity\News;
use App\Repository\NewsCategoryRepository;
use App\Repository\NewsRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:add-news',
    description: 'Add a short description for your command',
)]
class AddNewsCommand extends Command
{
    public function __construct(
        private NewsCategoryRepository $categoryRepository,
        private NewsRepository $newsRepository
    )
    {

        parent::__construct();
    }

    protected function configure(): void
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);










// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Cientistas fazem descoberta surpreendente sobre o funcionamento do cérebro');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=3858');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Eleições presidenciais são marcadas por polêmicas e acusações de fraude');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=9571');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo smartphone da empresa X promete revolucionar o mercado');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=3858');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo revela que exercícios físicos podem ajudar na prevenção de doenças mentais');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=4484');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Arte urbana transforma a paisagem da cidade e desperta debates sobre o papel da arte na sociedade');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=3485');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os impactos das mudanças climáticas na produção de alimentos');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=9516');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa Y anuncia fusão com gigante do setor de tecnologia');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=8479');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Tecnologia'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Descubra como a música pode ajudar no tratamento de doenças');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Tecnologia?id=5887');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro do autor X promete ser um sucesso de vendas');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=7220');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as tendências da moda para a próxima estação');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=7682');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialista alerta para os riscos do uso excessivo de redes sociais');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=6080');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Jovem talento brasileiro é destaque em competição internacional de matemática');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=4073');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia novo pacote de medidas econômicas para estimular o crescimento do país');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=1162');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa mostra que a dieta mediterrânea pode ser benéfica para a saúde mental');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=8998');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Atleta olímpico enfrenta desafios pessoais e busca superação nas próximas competições');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=7258');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Campanha contra o uso de plásticos descartáveis ganha força em todo o mundo');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=4206');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas debatem os desafios da educação em tempos de pandemia');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=6323');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo documentário aborda os impactos da tecnologia na vida moderna');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=1565');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça os bastidores do mundo da gastronomia com o chef X');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=5910');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Polêmica envolve a construção de uma nova usina hidrelétrica na região amazônica');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=4002');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os impactos da inteligência artificial no mercado de trabalho');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=8615');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Tecnologia'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Artistas brasileiros são destaque em exposição internacional de arte contemporânea');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Tecnologia?id=2779');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo estudo indica que o sono pode afetar a capacidade de tomar decisões');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=6769');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa Z anuncia lançamento de novo modelo de carro elétrico');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=8422');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais novidades apresentadas na maior feira de tecnologia do mundo');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=4015');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas alertam para os riscos do uso excessivo de medicamentos');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=1707');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia plano de incentivo à produção de energia limpa');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=2221');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Descubra como a meditação pode ajudar na redução do estresse e da ansiedade');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=9885');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Ativista ambiental é indicado ao prêmio Nobel da Paz');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=6026');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo revela que o consumo de café pode ter efeitos benéficos para a saúde');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=5835');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo filme de suspense promete ser um dos grandes sucessos do ano');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=8596');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de beleza e cosméticos');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=7891');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Tecnologia'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da educação infantil na era digital');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Tecnologia?id=6221');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia investimentos em infraestrutura para estimular o desenvolvimento regional');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=8731');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa aponta que a leitura pode ajudar na prevenção de doenças neurodegenerativas');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=3002');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Campanha de vacinação contra a gripe é lançada em todo o país');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=9346');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialista alerta para os riscos da exposição excessiva a telas de dispositivos eletrônicos');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=9113');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro de romance promete conquistar o público jovem-adulto');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=3768');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de decoração e design de interiores');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=8047');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Polêmica envolve projeto de lei que propõe mudanças na legislação trabalhista');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=9794');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisadores descobrem nova espécie de animal marinho no oceano Atlântico');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=1787');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Eleições municipais são marcadas por disputas acirradas e mudanças no cenário político');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=7605');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa A anuncia lançamento de novo aplicativo de saúde');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=6178');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas debatem os impactos da inteligência artificial na privacidade dos usuários');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=8253');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo revela que a prática de atividades físicas pode melhorar a saúde mental');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=2741');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Arte contemporânea é tema de exposição que reúne obras de artistas de todo o mundo');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=1697');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialista alerta para os riscos do consumo excessivo de alimentos ultraprocessados');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=6263');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Descubra como a música pode ajudar no tratamento de distúrbios alimentares');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=1310');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro do autor Y promete ser um dos mais aguardados do ano');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=2178');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de moda masculina');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=2803');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da gestão de empresas familiares');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=1949');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Jovem brasileira é destaque em competição internacional de tecnologia');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=4688');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia novo pacote de medidas para estimular a recuperação econômica pós-pandemia');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=7529');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa indica que o uso de suplementos alimentares pode ser prejudicial à saúde');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=9059');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Atleta paralímpico enfrenta desafios e busca superação nas próximas competições');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=4779');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Campanha de conscientização sobre a importância da preservação ambiental ganha força em todo o mundo');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=3527');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas debatem os desafios da inclusão de pessoas com deficiência no mercado de trabalho');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=4356');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo documentário aborda os desafios enfrentados pelos refugiados em todo o mundo');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=1912');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça os bastidores da indústria cinematográfica com o diretor X');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=4578');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Polêmica envolve a liberação de um novo tipo de agrotóxico no país');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=2222');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa B anuncia parceria com universidade para desenvolver tecnologias de inteligência artificial');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=8900');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo indica que a prática de atividades ao ar livre pode reduzir o risco de depressão');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=3962');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo modelo de celular da empresa Z promete ser um sucesso de vendas');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=9565');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da educação a distância na era digital');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=4784');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia plano de investimentos em infraestrutura para estimular o desenvolvimento econômico regional');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=3438');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro de poesia promete emocionar os leitores');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=1444');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de tecnologia wearable');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=6771');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas alertam para os riscos do uso excessivo de dispositivos eletrônicos na infância');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=4314');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa indica que a prática de yoga pode ajudar na redução do estresse e da ansiedade');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=2320');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo lança campanha de combate à violência contra a mulher');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=3968');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça os bastidores do mundo da moda com o estilista Y');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=1853');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da gestão de empresas multinacionais');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=4394');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo filme de ação promete ser um dos mais aguardados do ano');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=4006');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo indica que o consumo de alimentos orgânicos pode ter efeitos');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Política?id=3867');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da segurança digital na era da informação');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=4073');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo estudo indica que a meditação pode ajudar na redução do risco de doenças cardíacas');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=5893');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa C anuncia lançamento de novo carro elétrico');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=5692');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de beleza e cuidados pessoais');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=3426');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialista alerta para os riscos do sedentarismo na era digital');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=6269');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Descubra como a tecnologia pode ajudar no tratamento de transtornos mentais');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=3919');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro de ficção científica promete surpreender os leitores');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=8134');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da inclusão de pessoas LGBTQ+ no mercado de trabalho');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=7096');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Viagens'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo documentário aborda os desafios enfrentados pelas mulheres no mercado de tecnologia');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Viagens?id=4928');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa indica que a prática de atividades físicas pode ajudar na prevenção do câncer de mama');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=9452');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Jovem empreendedor cria startup de sucesso na área de tecnologia');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=9105');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa D anuncia investimentos em pesquisa e desenvolvimento de tecnologias inovadoras');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=7746');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo modelo de computador promete revolucionar a indústria da tecnologia');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=2046');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça os bastidores do mundo da música com o cantor X');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=1464');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas debatem os impactos da pandemia na saúde mental da população');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=5493');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo filme de terror promete arrepiar os espectadores');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=8947');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia medidas para incentivar o empreendedorismo e a inovação no país');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=7325');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Ciência'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo indica que a prática de atividades físicas pode ajudar na prevenção da demência');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Ciência?id=5207');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas alertam para os riscos da exposição excessiva às redes sociais na adolescência');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=5451');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa revela que a prática da meditação pode ajudar na redução do estresse no trabalho');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=1230');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Negócios'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça os bastidores do mundo da gastronomia com o chef Y');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Negócios?id=1391');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Política'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo modelo de celular da empresa W promete ser o mais avançado do mercado');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Política?id=1666');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas discutem os desafios da comunicação corporativa na era digital');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=2145');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo livro de autoajuda promete mudar a vida dos leitores');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=8325');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Opinião'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Estudo indica que a prática de atividades físicas pode ajudar na prevenção da osteoporose');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Opinião?id=6178');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Mundo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Governo anuncia medidas para estimular a inovação e a sustentabilidade na indústria de energia');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Mundo?id=1146');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Saúde'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas debatem os desafios da inclusão racial no mercado de trabalho');
        $news->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium in nibh volutpat imperdiet.');
        $news->setImage('https://loremflickr.com/419/225/Saúde?id=4601');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Brasil'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Novo documentário aborda os desafios enfrentados pelos povos indígenas em todo o mundo');
        $news->setDescription('Etiam condimentum tempor tortor, et tincidunt arcu finibus a. Ut sagittis erat ut ornare facilisis.');
        $news->setImage('https://loremflickr.com/419/225/Brasil?id=2357');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Conheça as principais tendências do mercado de decoração de interiores');
        $news->setDescription('Praesent et accumsan diam. Quisque hendrerit orci at augue vestibulum, non pulvinar elit volutpat.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=9243');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Estilo'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Pesquisa revela que a prática de atividades físicas pode ajudar na redução do risco de depressão pós-parto');
        $news->setDescription('Donec tortor odio, varius a auctor in, vehicula et libero. In non enim quis eros lacinia placerat non imperdiet lacus. Vestibulum maximus tristique molestie.');
        $news->setImage('https://loremflickr.com/419/225/Estilo?id=2313');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Design'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Empresa E anuncia parceria com universidade para desenvolver tecnologias inovadoras');
        $news->setDescription('Donec ullamcorper ultricies commodo. In quis lacus ligula.');
        $news->setImage('https://loremflickr.com/419/225/Design?id=9855');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);


// Categoria
        $newsCategory = $this->categoryRepository->findOneBy([
            'title' => 'Cultura'
        ]);

// Notícia
        $news = new News();
        $news->setTitle('Especialistas alertam para os riscos da exposição excessiva aos dispositivos eletrônicos na infância');
        $news->setDescription('Quisque sit amet augue luctus risus rhoncus elementum in ut neque. ');
        $news->setImage('https://loremflickr.com/419/225/Cultura?id=5127');
        $news->setCategory($newsCategory);
        $this->newsRepository->save($news,true);





        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
