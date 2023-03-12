<?
namespace Root\App;

class Sample
{
  private int $value;

  public function __construct(int $value)
  {
    $this->value = $value;
  }

  public function getValue(): int
  {
    return $this->value;
  }
}
