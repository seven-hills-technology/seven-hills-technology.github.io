import {registerBlockType} from '@wordpress/blocks';
import {InnerBlocks} from '@wordpress/block-editor';

const template = [
    ['core/columns', {}, [
        ['core/column', {class: "mis-child"}, []],
        ['core/column', {class: "mis-child"}, []]
    ]]
]

registerBlockType( 'sht-blocks/modern-dark-block', {
    title: 'Modern Dark Block - 2 Column',
    icon: 'smiley',
    category: 'layout',
    edit: (props) => {
        return (
            <>
                <div className="sh-band-flair dark-top"></div>
                <section className="sh-dark-band">
                    <div className="modern-information-structure">
                        <div className="mis-child">
                            <InnerBlocks template={template} />
                        </div>
                    </div>
                </section>
                <div className="sh-band-flair dark-bottom"></div>
            </>
        );
    },
    save: ( props ) => {
        return (
            <>
                <div className="sh-band-flair dark-top"></div>
                <section className="sh-dark-band">
                    <div className="modern-information-structure">
                            <InnerBlocks.Content />
                    </div>
                </section>
                <div className="sh-band-flair dark-bottom"></div>
            </>
        );
    },

})

registerBlockType( 'sht-blocks/modern-light-block', {
    title: 'Modern Light Block - 2 Column',
    icon: 'smiley',
    category: 'layout',
    edit: (props) => {
        return (
            <>
                <div className="sh-band-flair light-top"></div>
                <section className="sh-light-band">
                    <div className="modern-information-structure">
                        <div className="mis-child">
                            <InnerBlocks template={template} />
                        </div>
                    </div>
                </section>
                <div className="sh-band-flair light-bottom"></div>
            </>
        );
    },
    save: ( props ) => {
        return (
            <>
                <div className="sh-band-flair light-top"></div>
                <section className="sh-light-band">
                    <div className="modern-information-structure">
                            <InnerBlocks.Content />
                    </div>
                </section>
                <div className="sh-band-flair light-bottom"></div>
            </>
        );
    },

})