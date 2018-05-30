<div class="container">


    <br><br><br><br>
    <h3><a href="/logout">Вийти</a></h3>
    
    <h1 class="text-center">Персональна сторінка</h1>

    <hr>



    <div class="panel panel-default">
        <div class="panel-body">
            <form action="/cabinet" method="POST" class="form-horizontal" role="form">
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Назва матеріалу:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="name" class="form-control" value="" required="required" title="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="source_link" class="col-sm-2 control-label">Текст матеріалу:</label>
                    <div class="col-sm-10">
                        <textarea rows="10" cols="100%" name="source_link" id="source_link" class="form-control" value="" required="required" title=""> </textarea>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Додати</button>
                    </div>
                </div>

            </form>
        </div>
    </div>




    <?php if ($sources): ?>

        <?php foreach ($sources as $source) : ?>
        
            <?php
                echo '<a href="/delete/'.$source->getId().'">'.$source->getName().'</a>';
            ?>
    
        <?php endforeach; ?>
    
    <?php else: ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">No items to show, add some</h3>
            </div>
        </div>

    <?php endif; ?>

    
    

</div>
