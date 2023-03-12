<?

namespace Root\App;

use Root\App\Gettable;

class GettableSample
{
  use Gettable;

  #[Get] private static string $staticProp = 'Static prop';

  public function __construct(
    #[Get] private int $value,
    private string $noGetter = 'no getter'
  )
  {

  }
}