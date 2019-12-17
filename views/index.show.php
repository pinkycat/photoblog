<?php foreach($posts as $post): ?>
    <div class="card mb-3">
        <img style="width: 100%; display: block;" src="/uploads/<?=$post['image'];?>"/>
        <div class="card-footer">
            <ion-icon  class="text-primary" ios="ios-heart" md="md-heart"></ion-icon>
            <span class="text-muted"><?= $post['title']?></span>
            <span style="padding: 0 10px;" class="text-muted">|</span>
            <span class="badge badge-pill badge-primary">Primary</span>
            <span class="badge badge-pill badge-primary">Primary</span>
            <span class="badge badge-pill badge-primary">Primary</span>

            <span style="padding: 0 10px;" class="text-muted">|</span>
            <div style="display: inline-block">
                <a href="#" class="primary-link">Card link</a>
            </div>

        </div>
    </div>
<?php endforeach;?>