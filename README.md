
## About Wiz-Kit 

Wiz-kit is a development-kit based on the <a href='https://adminlte.io/'>AdminLTE </a>dashboard and <a href='http://labs.infyom.com/laravelgenerator/'>InfyOm CRUD Generator</a>, 

## Installation.
1. ` git clone https://github.com/wizag-ke/WizKit.git.`
2. ` cd WizKit`
3. ` composer install`
4. ` cp .env.example .env` or for windows
5. ` copy .env.example .env`

## Code generation
1. To generate an entire crude operation e.g for Events run
`php artisan infyom:scaffold Events --views=index,create,edit,show
`
2. To reverse the generation of the above crud action simply run 
`php artisan infyom:rollback Events scaffold --views=edit,create,index,show`
3. Generating full crud from existing table 
`php artisan infyom:scaffold User --fromTable --tableName=users`
4. To hide columns visible on the table 
```
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'Id',
            'Name',
            'Create At' => ['visible' => false, 'printable' => false, 'exportable' => true], // Will be hidden in html and print, but included in export
        ];
    }
 ```
 5. Since the datable are based on the <a href='https://datatables.net/'>Datables.net</a>, to add a fixed header/footer in javascript the code would be
 
 ```
 $(document).ready(function() {
     var table = $('#example').DataTable( {
         fixedHeader: {
             header: true,
             footer: true
         }
     } );
 } );

 ```
 fromthis link <a href="https://datatables.net/extensions/fixedheader/examples/options/header_footer.html">Fixed Header and Footer for datables</a>
 
 Using wizkit this can be achieved by editing the datatables class i.e. UsersDataTable and adding the initialisation attributed as show below
 
 ```
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'colvis', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
                'header'=> true, // => enabling fixed header
                'footer'=> true, // => enabling fixed footer
            ]);
    }
```