<?php
/**
 * Created by PhpStorm.
 * User: zev
 * Date: 2017/9/15
 * Time: 10:29
 */
namespace Zev\MyModel\Commands;

use Zev\MyModel\Seeds\OrgStructureTreeTableSeeder;
use Illuminate\Console\Command;

class InstallDatabase extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'myModel:install';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the myModel package';
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->publishDatabase();
    }
    /**
     * Create tables and seed it.
     */
    public function publishDatabase()
    {
        $this->call('migrate', ['--path' => str_replace(base_path(), '', __DIR__) . '/../database/migrations']);
        $this->info('Seeding...');
        $this->call('db:seed', ['--class' => OrgStructureTreeTableSeeder::class]);
        $this->comment('Seeded.');
    }
}