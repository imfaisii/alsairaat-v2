<div>
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l3100892356-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3100892356-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3100892356-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3100892356-0');
} else {
    $response = \Livewire\Livewire::mount('users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3100892356-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH C:\laragon\www\alsairaat\resources\views/livewire/dashboard/user-management/index-component.blade.php ENDPATH**/ ?>