<?php

namespace Backpack\Banners\app\Http\Controllers\Admin;

use Backpack\Banners\app\Http\Requests\BannerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use Backpack\LangFileManager\app\Models\Language;

/**
 * Class BannerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class BannerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    
    public function setup()
    {
        $this->crud->setModel('Backpack\Banners\app\Models\Banner');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/banner');
        $this->crud->setEntityNameStrings('баннер', 'Баннеры');
    }

    protected function setupListOperation()
    {   
        $this->crud->addColumns([
            [
              'name' => 'id',
              'label' => 'ID',
            ],
            [
								'name' => 'name',
								'label' => 'Название',
						],
						[
								'name' => 'is_active',
								'label' => 'Вкл',
								'type' => 'check'
						],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(BannerRequest::class);
				
        // NAME
				$this->crud->addField([
          'name' => 'name',
          'label' => 'Название',
				]);

        // SLUG
        $this->crud->addField([
          'name' => 'slug',
          'label' => 'URL',
          'hint' => 'По умолчанию будет сгенерирован из названия.',
        ]);

        // IS ACTIVE
        $this->crud->addField([
          'name' => 'is_active',
          'label' => 'Активен',
          'type' => 'boolean',
          'default' => '1',
        ]);


        // ITEMS
        $this->crud->addField([
          'name'  => 'items',
          'label' => 'Элементы',
          'type'  => 'repeatable',
          'fields' => [
            [
              'name' => 'caption',
              'label' => 'Заголовок'
            ],
            [
              'name' => 'excerpt',
              'label' => 'Подпись',
              'type' => 'ckeditor'
            ],
            [
              'name' => 'content',
              'label' => 'Содержание',
              'type' => 'ckeditor',
            ],
            [
              'name' => 'link',
              'label' => 'Ссылка',
              'wrapper'   => [ 
                'class' => 'form-group col-md-6'
              ],
            ],
            [
              'name' => 'link_text',
              'label' => 'Текст ссылки',
              'wrapper'   => [ 
                'class' => 'form-group col-md-6'
              ],
            ],
            [
              'name' => 'src',
              'label' => 'Изображение',
              'type' => 'browse',
              'hint' => 'Названия файлов загруженных через файловый менеджен должны быть на латинице и без пробелов.'
            ],
            [
              'name' => 'alt',
              'label' => 'Alt изображения',
              'wrapper'   => [ 
                'class' => 'form-group col-md-6'
              ],
            ],
            [
              'name' => 'title',
              'label' => 'Title изображения',
              'wrapper'   => [ 
                'class' => 'form-group col-md-6'
              ],
            ],
          ],
          'new_item_label'  => 'Добавить элемент',
          'init_rows' => 1,
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
