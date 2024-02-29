<?php
declare(strict_types=1);

namespace Training\ViewModelExample\ViewModel;


use Magento\Framework\View\Element\Block\ArgumentInterface;


class DeliveryMessage implements ArgumentInterface{
    public function getMessage(): string{
        return "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem praesentium hic sapiente temporibus, pariatur tenetur ad reiciendis amet id nihil neque voluptas nemo, dicta molestiae quia? Dolore eius veniam sequi.";
    }
}
