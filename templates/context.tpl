    <div id="wrapper">
        
        {include file="header.tpl"}

        <div id="page-wrapper">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Лента новостей
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <ul class="timeline">
                        
                    {foreach $res as $item}
                        {if $item.position =='left'}
                            <li>
                                <div class='{$item.class_type}' ><i class='{$item.type_image}'></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{$item.title}</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации {$item.date}</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{$item.summary}<a href='{$item.link}'>Подробнее...</a></p>
                                    </div>
                                </div>
                            </li>
                        {/if}
                        {if $item.position =='right'}
                            <li class="timeline-inverted">
                                <div class='{$item.class_type}'><i class='{$item.type_image}'></i></div>
                                <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">{$item.title}</h4>
                                </div>
                                    <div class="timeline-body">
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации {$item.date}</small></p>
                                        <p>{$item.summary}<a href='{$item.link}'>Подробнее...</a></p>                       
                                    </div>
                                </div>
                            </li>
                        {/if}
                    {/foreach}
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>