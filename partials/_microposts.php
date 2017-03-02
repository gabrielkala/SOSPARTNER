            <article class="media statuts-media">
              <div class="pull-left">
                <img src="<?= get_avatar_url($user->email) ?>" alt="<?= 
                    $user->pseudo ?>" class="media-object">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?= e($user->pseudo); ?></h4>
                <p><i class="fa fa-clock-o"></i> <span class="timeago" title="<?= $microposts->created_at ?>"><?= $microposts->created_at ?></span>
                  <a date-confirm="Voulez vous vraiment suppromer cette publication ?"
                          href="delete_micropost.php?id=<?= $microposts -> id ?>">
                      <i class="fa fa-trash"></i> Supprimer

                  </a>
                </p>
                <?= nl2br(e($microposts->content)); ?>
              </div>

            </article>