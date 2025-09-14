<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isNull;

class GoogleRecaptchaV3 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function __construct(private ?string $action=null , private ?float $minscore=null)
    {

    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $siteverify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
            'secret'=>config('services.google_recaptcha_v3.secretkey'),
            'response'=>$value
        ]);
        $body = $siteverify->json();
        if($body['success']==='false')
            {
                $fail('سرویس اعتبارسنجی گوگل پاسخگو نیست لطفا دوباره تلاش کنید  ') ;
            }
            if(!is_null($this->minscore) && $body['score'] < $this->minscore)
                {
                    $fail(' متاسفانه اعتبار سنجی شما توسط گوگل رد شد !');
                }
        if(!is_null($this->action) && $this->action !== $body['action'])
        {
            $fail('اکشن فرم با اکشن احراز هویت گوگل مطابقت ندارد');
        }

    }
}
