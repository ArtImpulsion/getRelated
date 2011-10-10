<?php

$_lang['getrelated'] = 'getRelated';
$_lang['getrelated.desc'] = 'Listes les pages en relation.';
$_lang['getrelated.pagesfound'] = 'Les [[+count]] pages suivantes peuvent vous intéresser :';
$_lang['getrelated.error.loadingclass'] = 'Erreur en chargeant une classe getRelated depuis [[+path]].';
$_lang['getrelated.error.nofields'] = 'Pas de champs ni de variables de template où chercher.';
$_lang['getrelated.error.nodistinctivedata'] = 'Erreur dans la collecte de données depuis la resource désignée en correspondance.';
$_lang['getrelated.error.invalidresource'] = 'La ressource désignée ou par défaut est invalide.';

$_lang['getrelated.stopwords'] = "a,able,about,above,abroad,according,accordingly,across,actually,adj,after,afterwards,again,against,ago,ahead,ain't,all,allow,allows,almost,alone,along,alongside,already,also,although,always,am,amid,amidst,among,amongst,an,and,another,any,anybody,anyhow,anyone,anything,anyway,anyways,anywhere,apart,appear,appreciate,appropriate,are,aren't,around,as,a's,aside,ask,asking,associated,at,available,away,awfully,b,back,backward,backwards,be,became,because,become,becomes,becoming,been,before,beforehand,begin,behind,being,believe,below,beside,besides,best,better,between,beyond,both,brief,but,by,c,came,can,cannot,cant,can't,caption,cause,causes,certain,certainly,changes,clearly,c'mon,co,co.,com,come,comes,concerning,consequently,consider,considering,contain,containing,contains,corresponding,could,couldn't,course,c's,currently,d,dare,daren't,definitely,described,despite,did,didn't,different,directly,do,does,doesn't,doing,done,don't,down,downwards,during,e,each,edu,eg,eight,eighty,either,else,elsewhere,end,ending,enough,entirely,especially,et,etc,even,ever,evermore,every,everybody,everyone,everything,everywhere,ex,exactly,example,except,f,fairly,far,farther,few,fewer,fifth,first,five,followed,following,follows,for,forever,former,formerly,forth,forward,found,four,from,further,furthermore,g,get,gets,getting,given,gives,go,goes,going,gone,got,gotten,greetings,h,had,hadn't,half,happens,hardly,has,hasn't,have,haven't,having,he,he'd,he'll,hello,help,hence,her,here,hereafter,hereby,herein,here's,hereupon,hers,herself,he's,hi,him,himself,his,hither,hopefully,how,howbeit,however,hundred,i,i'd,ie,if,ignored,i'll,i'm,immediate,in,inasmuch,inc,inc.,indeed,indicate,indicated,indicates,inner,inside,insofar,instead,into,inward,is,isn't,it,it'd,it'll,its,it's,itself,i've,j,just,k,keep,keeps,kept,know,known,knows,l,last,lately,later,latter,latterly,least,less,lest,let,let's,like,liked,likely,likewise,little,look,looking,looks,low,lower,ltd,m,made,mainly,make,makes,many,may,maybe,mayn't,me,mean,meantime,meanwhile,merely,might,mightn't,mine,minus,miss,more,moreover,most,mostly,mr,mrs,much,must,mustn't,my,myself,n,name,namely,nd,near,nearly,necessary,need,needn't,needs,neither,never,neverf,neverless,nevertheless,new,next,nine,ninety,no,nobody,non,none,nonetheless,noone,no-one,nor,normally,not,nothing,notwithstanding,novel,now,nowhere,o,obviously,of,off,often,oh,ok,okay,old,on,once,one,ones,one's,only,onto,opposite,or,other,others,otherwise,ought,oughtn't,our,ours,ourselves,out,outside,over,overall,own,p,particular,particularly,past,per,perhaps,placed,please,plus,possible,presumably,probably,provided,provides,q,que,quite,qv,r,rather,rd,re,really,reasonably,recent,recently,regarding,regardless,regards,relatively,respectively,right,round,s,said,same,saw,say,saying,says,second,secondly,see,seeing,seem,seemed,seeming,seems,seen,self,selves,sensible,sent,serious,seriously,seven,several,shall,shan't,she,she'd,she'll,she's,should,shouldn't,since,six,so,some,somebody,someday,somehow,someone,something,sometime,sometimes,somewhat,somewhere,soon,sorry,specified,specify,specifying,still,sub,such,sup,sure,t,take,taken,taking,tell,tends,th,than,thank,thanks,thanx,that,that'll,thats,that's,that've,the,their,theirs,them,themselves,then,thence,there,thereafter,thereby,there'd,therefore,therein,there'll,there're,theres,there's,thereupon,there've,these,they,they'd,they'll,they're,they've,thing,things,think,third,thirty,this,thorough,thoroughly,those,though,three,through,throughout,thru,thus,till,to,together,too,took,toward,towards,tried,tries,truly,try,trying,t's,twice,two,u,un,under,underneath,undoing,unfortunately,unless,unlike,unlikely,until,unto,up,upon,upwards,us,use,used,useful,uses,using,usually,v,value,various,versus,very,via,viz,vs,w,want,wants,was,wasn't,way,we,we'd,welcome,well,we'll,went,were,we're,weren't,we've,what,whatever,what'll,what's,what've,when,whence,whenever,where,whereafter,whereas,whereby,wherein,where's,whereupon,wherever,whether,which,whichever,while,whilst,whither,who,who'd,whoever,whole,who'll,whom,whomever,who's,whose,why,will,willing,wish,with,within,without,wonder,won't,would,wouldn't,x,y,yes,yet,you,you'd,you'll,your,you're,yours,yourself,yourselves,you've,z,zero";

$_lang['getrelated.prop_desc.resource'] = 'Utiliser soit l’ID de ressource à mettre en relation, soit "current" ou laisser vide pour rechercher par rapport à la page courante.';
$_lang['getrelated.prop_desc.fields'] = 'Liste séparée par des virgules de nom de champ:poids a utiliser pour la comparaison. Préfixez les TV avec "tv. ". Ne pas utiliser le contenu sauf à rendre les performances inacceptables. Exemple d’utilisation : pagetitle:3,tv.MyTags:7,tv.MySubjects:15,introtext:2';
$_lang['getrelated.prop_desc.returnFields'] = 'Champs de ressources à inclure dans la sortie éventuelle (TV non supportées actuellement).';
$_lang['getrelated.prop_desc.parents'] = 'Liste de parents séparés par des virgules à utiliser pour trouver les ressources en relation.';
$_lang['getrelated.prop_desc.parentsDepth'] = 'Profondeur de recherche parents.';
$_lang['getrelated.prop_desc.contexts'] = 'Liste de contextes séparés par des virgules à utiliser pour  la recherche.';
$_lang['getrelated.prop_desc.includeUnpublished'] = 'Utiliser aussi les ressources non publiées dans le résultat.';
$_lang['getrelated.prop_desc.includeHidden'] = 'Utiliser aussi les ressources marquées comme cachées dans le résultat.';
$_lang['getrelated.prop_desc.limit'] = 'Nombre de résultat à fournir.';
$_lang['getrelated.prop_desc.fieldSample'] = 'Nombre de ressources à utiliser dans la comparaison basée sur les champs de ressources. Peux avoir un impact important  sur les performances, aussi si vous rencontrez des problems de performances, essayer de réduire ce paramètre.';
$_lang['getrelated.prop_desc.fieldSort'] = 'Champ de la ressource à utiliser pour le tri, à utiliser en conjonction avec le la propriété fieldSample.';
$_lang['getrelated.prop_desc.fieldSortDir'] = 'Sens du tri dans la propriété fieldSort.';
$_lang['getrelated.prop_desc.tvSample'] = 'Nombre de résultats TV à inclure dans la comparaison avec des valeurs de TV (note : une ressource peux avoir plus d’un résultat en fonction des propriétés de vos champs).';
$_lang['getrelated.prop_desc.tvSort'] = 'Champ de la ressource à utiliser pour le tri dans la recherche TV, à utiliser en conjonction avec le la tvSample.';
$_lang['getrelated.prop_desc.tvSortDir'] = 'Sens du tri dans la propriété tvSort.';
$_lang['getrelated.prop_desc.tplOuter'] = 'Nom du chunck utilisé pour template de sortie, voir modéle par défaut dans core/components/getrelated/elements/snippets/chunks/.';
$_lang['getrelated.prop_desc.tplRow'] = 'Nom du chunck utilisé pour template de ligne (row), voir modéle par défaut dans core/components/getrelated/elements/snippets/chunks/.';
$_lang['getrelated.prop_desc.noResults'] = 'Texte ou affichage à faire quand il n’y a pas de relations à afficher.';
$_lang['getrelated.prop_desc.toPlaceholder'] = 'Pour stocker le résultat dans un tampon (placeholder) plutôt que de l’afficher, définir ici le nom du tampon (placeholder).';
$_lang['getrelated.prop_desc.rowSeparator'] = 'Chaine à utiliser comme séparateur entre les lignes (rows).';
$_lang['getrelated.prop_desc.defaultWeight'] = 'Poids à assigner par défaut aux champs qui n’ont pas été spécifiquement définis.';
$_lang['getrelated.prop_desc.debug'] = 'Active/désactive le mode debug. A l’activation d’importantes quantités d’informations sont affichées. ';

?>