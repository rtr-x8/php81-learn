<?
namespace Root\App;

require_once __DIR__ . '/../vendor/autoload.php';

use Root\App\Sample;
use Root\App\PromotionSample;
use Root\App\GettableSample;
use Exception;


class Main
{
  public function main()
  {
    $this->p(Sample::class, (new Sample(123))->getValue());
    $this->p(PromotionSample::class, (new PromotionSample(333))->getValue());
    $this->p(GettableSample::class, (new GettableSample(555))->value());
    $this->p(GettableSample::class, (new GettableSample(555))->staticProp());
    try {
      (new GettableSample(555))->noGetter();
    } catch ( Exception $e ) {
      //$this->p($e->getMessage());
    }
  }

  private function p(...$variables): void
  {
    var_dump(...$variables);
    print('----------' . PHP_EOL);
  }
}

print('=============' . PHP_EOL . date("F j, Y, g:i a") . PHP_EOL . '=============' . PHP_EOL);
(new Main())->main();
