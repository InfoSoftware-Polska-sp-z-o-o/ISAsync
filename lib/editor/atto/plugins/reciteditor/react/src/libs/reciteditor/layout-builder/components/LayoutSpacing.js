// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto HTML editor
 *
 * @package    atto_reciteditor
 * @copyright  2019 RECIT
 * @license    {@link http://www.gnu.org/licenses/gpl-3.0.html} GNU GPL v3 or later
 */

import React, { Component } from 'react';
import { ComboBox} from '../../RecitEditor';

export class LayoutSpacing extends Component {
    static defaultProps = {
        name: "",
        value: [], 
        options: [],
        onChange: null,
    };
    
    constructor(props){
        super(props);

        this.onChange = this.onChange.bind(this);

    }
    
    render() {


        let that = this;
        let main = 
            <div className="layout-spacing">
                {this.props.options.map((option, index) => {
                    let dataProvider = [];

                    for(let i = 0; i < option.nbItems; i++){
                        dataProvider.push({text: i, value: `${option.name}-${i}`});
                    }

                    let oldValue = that.getValue(dataProvider);
                    let result = <ComboBox key={index} name={option.name} value={oldValue} size='sm' className={`item-${index+1}`} options={dataProvider} 
                                        onChange={(event) => that.onChange(oldValue, event.target.value)}></ComboBox>;
                    return result;
                })}
            </div>

        return (main);
    }   

    getValue(options){
        for(let className of this.props.value){
            for(let option of options){
                if(option.value === className){
                    return className;
                }
            }
        }

        return "";
    }

    onChange(oldValue, newValue){
        let result = {target:{name: this.props.name, value: {oldValue: oldValue, newValue: newValue}}}
        this.props.onChange(result);
    }
}
