<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <!-- Ajout du style CSS spécifique pour la liste -->
    <style>
        .chat-list {
            width: 100%;
            background-color: #ffffff;
        }

        .chat-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            cursor: pointer;
            transition: background-color 0.2s;
            border-bottom: 1px solid #f0f0f0;
            text-decoration: none; /* Enlève le soulignement des liens */
            color: inherit; /* Garde la couleur du texte par défaut */
        }

        .chat-item:hover {
            background-color: #f5f5f5;
        }

        .avatar-container {
            margin-right: 15px;
            flex-shrink: 0;
        }

        .avatar {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            object-fit: cover;
        }

        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0; /* Important pour que le texte tronqué fonctionne */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 4px;
        }

        .name {
            font-weight: 700;
            font-size: 15px;
            color: #000;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .name svg {
            color: #333;
            flex-shrink: 0;
        }

        .time {
            font-size: 12px;
            color: #888;
            flex-shrink: 0;
            margin-left: 8px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .message-preview {
            font-size: 14px;
            color: #777;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-right: 10px;
        }

        .sender {
            color: #5eaadd;
            font-weight: 500;
        }

        .badge {
            background-color: #a0a0a0;
            color: white;
            font-size: 12px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 12px;
            min-width: 22px;
            text-align: center;
            flex-shrink: 0;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Conteneur de la liste -->
                <div class="chat-list">
                    
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Lien cliquable pour chaque utilisateur -->
                        <a href="<?php echo e(route('chat', $user->id)); ?>" class="chat-item">
                            
                            <!-- Avatar -->
                            <div class="avatar-container">
                                <!-- Utilisation d'un placeholder ou de l'avatar de l'utilisateur -->
                                <!-- Si vous avez une colonne 'avatar' en base de données, remplacez par : -->
                                <!-- <img src="<?php echo e($user->avatar ?? 'https://via.placeholder.com/50'); ?>" alt="<?php echo e($user->name); ?>" class="avatar"> -->
                                <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode($user->name)); ?>&background=random&size=50" alt="<?php echo e($user->name); ?>" class="avatar">
                            </div>

                            <!-- Contenu (Nom, Heure, Message, Badge) -->
                            <div class="content">
                                <div class="header">
                                    <span class="name">
                                        <!-- Icône générique (Groupe) - Vous pouvez conditionner l'icône selon le type d'utilisateur -->
                                        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                        </svg>
                                        <?php echo e($user->name); ?>

                                    </span>
                                    <!-- Heure fictive (à remplacer par vos données réelles plus tard) -->
                                    <!-- <span class="time"><?php echo e(now()->format('g:i A')); ?></span> -->
                                </div>
                                <div class="footer">
                                    <span class="message-preview">
                                        <!-- Message fictif -->
                                        <span class="sender"></span> Cliquez pour discuter...
                                    </span>
                                    <!-- Badge fictif (à remplacer par le nombre de messages non lus) -->
                                    <!-- <span class="badge"><?php echo e(rand(1, 100)); ?></span> -->
                                </div>
                            </div>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\Admin\Documents\LaravelProject\laravel-reverb-chat-app\resources\views/dashboard.blade.php ENDPATH**/ ?>