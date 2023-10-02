


#   koninta task php environment 5.6.40

    PHP version: 5.6.40
    Apache/2.4.51 (Win64) PHP/5.6.40
    phpMyAdmin Version information: 4.9.7
    -- PhpMyAdmin 5.1.1 not compatible with PHP 5.6.40 --

#   my php environment 8.1.12

#   Task

    *   reikia padaryti naujienu sistema su administracija

        OK useriu lentele: 'users':
        id int (11)
        user varchar (50)
        password varchar (50)

        OK naujienu lentele: 'news'
        id (11)
        short varchat (100) not null
        full text not null
        visible bool
        type int (is lenteles news_type.id)
        created_at (datetime)
        updated_at (datetime)
        visible_at (datetime)

        OK lentele: 'news_type'
        id (11)
        varchar (100) not null

    *   fieldas news.type turi 3 tipus, kur guli pagal id lenteleje news_type:
        OK 1 - funkcijos
        OK 2 - moduliai
        OK 3 - atnaujinimai
        OK 4 - naujienos*

    *   reikia padaryti naujienu sistema, su galimybe nauduotis WYSIWYG (tiks senas CKEditor) su galimybe kelti nuotraukas/failus[pdf/excel/etc] i savo folderi '/uploads/' subfolderi

    *   admin paneleje:

        turi buti galimybe keisti tipus

        turi buti galimybe rodyti/slepti postus is news

        turi buti galimybe parasyti naujiena, issaugoti, o atsiras ji tik tada, kai NOW() sutaps su visible_at datatime, galimybe per datetime picker pasirinkti data ir laika
        po kurimo ir atnaujinimo fieldai created_at ir updated_at - atsinaujina

    *   front endas:

    *   turi buti front'endo isvedimas pagal nuoroda: news.php?id=[news.id] (pvz <a href='news.php?id=3'>, kuri yra visible ir kuri now() > visible_at )
        visu tipu saraso isvedimas su galimybe limituoti postu kieki pagal konkretu naujienu tipa (pagal savo fantazija, tik ne iframe)

        pvz:
        $type = 1
        $limit = 5
        include 'news.php';
        unset($type, $limit)
        gaunam 5 postu objekta pagal type 1 (funkcijos)

        $type = 2
        $limit = 6
        include 'news.php';
        unset($type, $limit)
        gaunam 6 postu objekta pagal type 2 (moduliai)

    *   kiekviena objekta uzmaunam rankutem i html su pries tai aprasytom css klasem pvz:galima per array, jokio skirtumo

        <h3>paskutiniai funkcijos atnaujinimai</h3>
        <?
            foreach ($objects as $object) {
            echo "<a href='news.php?=id".$object[id]"'>".$object[title]."</a><br>";
            }
        ?>

    *   jeigu bus koks nors kitas variantas, tai ne problema, svarbiausiai, kad galima butu per request_once arba include pakviesti front endo faila (viena) ir per paduotus parametrus gauti objektus

    *   parasyti nenauduojant jokiu frameworku, kad veiktu ant php 5.6
